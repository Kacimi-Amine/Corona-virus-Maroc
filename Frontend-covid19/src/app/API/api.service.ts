
import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { GlobalModel } from '../Model/GlobalModel';
import { map} from 'rxjs/operators';
@Injectable({
    providedIn: 'root'
  })

export class ApiService {
    baseUrl='http://127.0.0.1:8000/api/';
    urlreg='http://127.0.0.1:8000/api/regions/'

    constructor(private http:HttpClient) { }
    getData(){
        return this.http.get<GlobalModel>(this.baseUrl);   }
fetchDataByreg(reg:string){
    return this.http.get<GlobalModel>(this.urlreg+reg);
    }
    fetchDatareg(reg:string){
      return this.http.get<GlobalModel>(this. baseUrl+reg);
      }
fetchDATAbyville(reg:string,vl:string){
  return this.http.get<GlobalModel>(this.baseUrl+reg+'/'+vl);
}

    
fetchDailyDatass(){
    return this.http.get(this.baseUrl+'datas');

}
fetchregions(){
    return this.http.get(this.baseUrl+'regions');

} 

fetchDailyData(){
  return this.http.get(this.baseUrl+'datas')
  .pipe(
    map((e:any)=>
    e.map((u:any)=>{
      return{
        hos:u.confirmed-u.recovered-u.deaths,
        lastupdate: u.lastupdate
      };
    })
    )
  )
    
     

}
}
