import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { NavController, MenuController, ToastController, AlertController, LoadingController } from '@ionic/angular';
import { LoginService } from '../../Service/Login/login.service';
import { Storage } from '@ionic/storage';
import { User } from 'src/app/Entity/user';
@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  public onLoginForm: FormGroup;
  constructor(
    public navCtrl: NavController,
    public menuCtrl: MenuController,
    public toastCtrl: ToastController,
    public alertCtrl: AlertController,
    public loadingCtrl: LoadingController,
    private formBuilder: FormBuilder,
    private login:LoginService,
    private storage: Storage
  ) { }

  ionViewWillEnter() {
    this.menuCtrl.enable(false);
    
  }

  ngOnInit() {
    this.storage.get('username').then(res=>{
      if(res!=null)
        {
          this.login.getcurrentuser(res);
        }
    }
      );
    
    this.onLoginForm = this.formBuilder.group({
      'username': [null, Validators.compose([
        Validators.required
      ])],
      'password': [null, Validators.compose([
        Validators.required
      ])]
    });

  }

  async forgotPass() {
    const alert = await this.alertCtrl.create({
      header: 'Forgot Password?',
      message: 'Enter you email address to send a reset link password.',
      inputs: [
        {
          name: 'email',
          type: 'email',
          placeholder: 'Email'
        }
      ],
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel',
          cssClass: 'secondary',
          handler: () => {
            console.log('Confirm Cancel');
          }
        }, {
          text: 'Confirm',
          handler: async () => {
            const loader = await this.loadingCtrl.create({
              duration: 2000
            });

            loader.present();
            loader.onWillDismiss().then(async l => {
              const toast = await this.toastCtrl.create({
                showCloseButton: true,
                message: 'Email was sended successfully.',
                duration: 3000,
                position: 'bottom'
              });

              toast.present();
            });
          }
        }
      ]
    });

    await alert.present();
  }

  // // //
  goToRegister() {
    this.navCtrl.navigateRoot('/register');
  }

  goToHome() {
    
    this.login.login(this.onLoginForm).subscribe(res=>{

      this.login.Store(this.onLoginForm.get('username'));
      this.login.getcurrentuser(this.onLoginForm.get('username')['value']);
      //this.navCtrl.navigateRoot('/home-results');
    });
    // this.navCtrl.navigateRoot('/home-results');
  }

}
