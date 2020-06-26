import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CovidchartComponent } from './covidchart.component';

describe('CovidchartComponent', () => {
  let component: CovidchartComponent;
  let fixture: ComponentFixture<CovidchartComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CovidchartComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CovidchartComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
