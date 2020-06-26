import { PreventionComponent } from './../prevention/prevention.component';
import { CovidchartComponent } from './../covidchart/covidchart.component';
import { Covid19defComponent } from './../covid19def/covid19def.component';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';


const routes: Routes = [
    {
        path: '',
        component: CovidchartComponent,
    },
    {
        path:'covid19def',
        component:Covid19defComponent,
    },
    {
        path:'Prevention',
        component:PreventionComponent,
    }
    
];

@NgModule({
    imports: [
        RouterModule.forRoot(routes)
    ],
    exports: [
        RouterModule
    ],
    declarations: []
})
export class AppRoutingModule { }