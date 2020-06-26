import { Component, OnInit } from '@angular/core';
import { GlobalModel } from '../Model/GlobalModel';
import { ApiService } from '../API/api.service';
import { Label, MultiDataSet } from 'ng2-charts';
import { ChartType } from 'chart.js';

@Component({
  selector: 'app-covidchart',
  templateUrl: './covidchart.component.html',
  styleUrls: ['./covidchart.component.css']
})
export class CovidchartComponent implements OnInit {
  title = 'covidchart';
  global:boolean;
  regionn:string;
  data:GlobalModel[]=[];
  datareg:GlobalModel;
  datanv:GlobalModel;
  datavl:GlobalModel;
  dataNumber:Number;
  vil:string;
  reeg:string;
  poureco:number;
  pourdeth:number;
  hospita:number;
  moreinf:Boolean=true;
  dailyData: any[];
  regions:any[];
  reg:any[];
  
  lineChartData: any[]=[
    {
      data:[65,64,33,44],label:'temp label',borderColor:'rgb(100,0,0)'
    }
  ];
  lineChartType='line';
  lineChartLabels:any[]=[
    'label01','label02','label03'];
    lineChartData2: any[]=[
      {
        data:[65,64,33,44],label:'temp label',borderColor:'rgb(0,0,0)',fontColor:'black',
      }
    ];
    
    lineChartLabels2:any[]=[
      '11/11/2020','11/11/2020','11/11/2020'];
    
  
    doughnutChartLabels: Label[] = ['Confirmés', 'Géris', 'Morts'];
    doughnutChartData: MultiDataSet = [
      [55, 25, 20]
    ];
    doughnutChartType: ChartType = 'doughnut';
  barChartType='horizontalBar';
  barChartLabels:any[]=[
    'Confirmed','recovred','Deaths'];
    barChartData: any[]=[
      {
        
        data:[65,76,33],
       
        label:'label',
        backgroundColor: ['rgba(246, 224, 99, 0.979)',
'rgba(111, 246, 99, 0.979)',
'rgba(231, 63, 63, 0.979)'

]
        
      
      }
    ];
    bol: boolean=false;
  constructor(private api:ApiService) { }

  ngOnInit(): void {

    this.global=true;
    this.fetchData();
     this.fetchregions();
     this.fetchDailyData();
     this.fetchDailyDatahos();
     
  }








  fetchData(){
    this.api.getData()
    .subscribe(
    (result) =>{
      this.data=result[0];

      this.poureco=this.data['recovered']/this.data['confirmed'] *100;
      this.pourdeth=this.data['deaths']/this.data['confirmed'] *100;
      this.hospita=this.data['confirmed']-this.data['recovered']-this.data['deaths'];
     //this.dataNumber= this.data.confirmed;
      console.log(this.data);
    }
   
    );
    
  }


fetchregions(){
  this.api.fetchregions()
  .subscribe(
    (res:any[])=>{
      this.reg=res;
         this.regions=this.reg.map((name)=>name['region']);
          // console.log( this.regions);
        }
      );
}


getinfovil(inf:GlobalModel){

  this.api.fetchDATAbyville(inf.region,inf.ville).subscribe(

    (result) =>{
      this.datavl=result[0];
      this.vil=inf.ville;
      this.moreinf=!this.moreinf;
      this.bol=true;
    
      this.doughnutChartData=[[this.datavl.confirmed, this.datavl.recovered,this.datavl.deaths ]]; 
          
      //console.log(inf.ville);
    }
  )
}

fetchDataByregions(eg:string){
  this.api.fetchDatareg(eg).subscribe((dt) => {
       this.datanv =dt;
    console.log(this.datanv);
  });
  this.api.fetchDataByreg(eg).subscribe(
    (result) =>{
      this.data=result[0];
      this.poureco=this.data['recovered']/this.data['confirmed'] *100;
      this.pourdeth=this.data['deaths']/this.data['confirmed'] *100;
      this.hospita=this.data['confirmed']-this.data['recovered']-this.data['deaths'];
      

  this.barChartData=[{
data:[this.data['confirmed'], this.data['recovered'],this.data['deaths'] ],

label:'Personne',
height:655,
width:2100,
backgroundColor: ['rgba(246, 224, 99, 0.979)',
'rgba(111, 246, 99, 0.979)',
'rgba(231, 63, 63, 0.979)'

]

}]; 

});
}
regionChanged(value:string){
this.regionn=value;
this.reeg=value;
if(value=='Tous le Maroc'){
  this.fetchData();
  this.global=true;
}
else{
  this.fetchDataByregions(this.regionn);
  this.global=false;
}
}
fetchDailyData(){
  this.api.fetchDailyDatass()
  .subscribe((res:any)=>{

      this.lineChartLabels=res.map((date)=>(date['lastupdate']));
      var infectedData=res.map((confirmed)=>confirmed['confirmed']);
      var deaths=res.map((deaths)=>deaths['deaths']);
      var recovered=res.map((recovered)=>recovered['recovered']);
     
      // console.log(res);


      this.lineChartData=[
        {
          data:infectedData,
          label:'confirmés',
          
        
          
        },
        {
          data:deaths,
          label:'Morts',
      
        
         
        },
        {
          data:recovered,
          label:'géris'
          
        }
      ];
    });
  
}  


fetchDailyDatahos(){
  this.api.fetchDailyData()
  .subscribe(
    (re:any)=>{
      this.lineChartLabels2=re.map((date)=>date['lastupdate']);
      var infectedData=re.map((confirmed)=>confirmed['hos']);
      this.lineChartData2=[
        {
          data:infectedData,
          label:'Hospitalisés'
          
        }
     
      ];
    });
  
}  
}
