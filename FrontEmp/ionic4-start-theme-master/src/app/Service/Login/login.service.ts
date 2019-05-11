import { Injectable } from '@angular/core';
import {Http} from '@angular/http';
import { Storage } from '@ionic/storage';
@Injectable({
  providedIn: 'root'
})
export class LoginService {

  constructor(private http: Http,private storage: Storage) { }
  Logged()
  {
    this.http.get(`http://localhost/Connect/Connect/Back/web/app_dev.php/getToken`).subscribe(res=>{
      res=res.json();
      this.storage.set('token', res[0]);
    })
    
    
  }
  Storetoken()
  {
    this.http.get(`http://localhost/Connect/Connect/Back/web/app_dev.php/getToken`).subscribe(res=>{
      res=res.json();
      this.storage.set('token', res[0]);
    })

  }

  
}
