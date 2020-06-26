import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import {ChartsModule} from 'ng2-charts';
//had form !
import { from } from 'rxjs';
import {CountUpModule} from 'ngx-countup';

import { AppComponent } from './app.component';
import { Covid19defComponent } from './covid19def/covid19def.component';
import { AppRoutingModule } from './app-routing/app-routing.module';
import { NavbarComponent } from './navbar/navbar.component';
import { FooterComponent } from './footer/footer.component';
import { CovidchartComponent } from './covidchart/covidchart.component';
import { PreventionComponent } from './prevention/prevention.component';


@NgModule({
  declarations: [
    AppComponent,
    Covid19defComponent,
    NavbarComponent,
    FooterComponent,
    CovidchartComponent,
    PreventionComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    ChartsModule,
    CountUpModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
