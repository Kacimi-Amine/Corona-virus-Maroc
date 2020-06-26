import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Covid19defComponent } from './covid19def.component';

describe('Covid19defComponent', () => {
  let component: Covid19defComponent;
  let fixture: ComponentFixture<Covid19defComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Covid19defComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Covid19defComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
