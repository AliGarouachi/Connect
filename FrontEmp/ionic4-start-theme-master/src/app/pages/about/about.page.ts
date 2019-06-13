import { Component, OnInit } from '@angular/core';
import { TransactionService } from 'src/app/Service/Transaction/transaction.service';
import { LoginService } from 'src/app/Service/Login/login.service';

@Component({
  selector: 'app-about',
  templateUrl: './about.page.html',
  styleUrls: ['./about.page.scss'],
})
export class AboutPage implements OnInit {
  transactions:any;
  constructor(  public transaction:TransactionService

  ) { 

   }

  ngOnInit() {
    this.transaction.get(1).subscribe(res=>{
      this.transactions=res.json();
      this.transactions.forEach(trans => {
       console.log( trans.date=new Date(trans.date.timestamp).toLocaleString());
        
      });
      console.log(this.transactions);
    });
  }

}
