import { Injectable } from '@angular/core';
import {Http ,Headers, RequestOptions} from '@angular/http';
import { Storage } from '@ionic/storage';


@Injectable({
  providedIn: 'root'
})
export class TransactionService {

  constructor(
              private http: Http,
              private storage: Storage
    ) { }
  record(form)
  {
    let headers = new Headers({ 'Content-Type': 'application/json' });
    let options = new RequestOptions({ headers: headers });
    this.http.post('http://192.168.1.4/Connect/Connect/Back/web/app_dev.php/transactions/new',form,options).subscribe(res=>{
    });
  }
  get(id)
  {
    return this.http.get('http://192.168.1.4/Connect/Connect/Back/web/app_dev.php/transactions/personnel/'+id);
  }
}
