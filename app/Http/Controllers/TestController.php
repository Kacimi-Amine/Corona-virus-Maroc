<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Any;

class TestController extends Controller
{
  //Sum des cas par regions
public function reg(string $intitule_reg){
    $covid=DB::select("SELECT  Repartitionrg('$intitule_reg')  FROM DUAL");
    return   response()->json($covid);
    
}

//select la sum des cas depuis la table (reg...)
public function all(){
     $covid=DB::select("SELECT  Repa   FROM DUAL"); 
     return   response()->json($covid);
     
 }
//return les statistique d'une ville d'une region 
 public function villereg(string $intitule_reg,string $ville){
   
     $covid=DB::select("SELECT  Repartitionrgvl('$intitule_reg','$ville')   FROM DUAL");
 
     return   response()->json($covid);
     
 }
//select les regions qui existe dans la table
 public function regionsdata(){
   
     $covid=DB::select("SELECT  regiondata   FROM DUAL");
 
     return   response()->json($covid);     
 }
 //select depuis la table coviddata (confirmeed,recovred,deaths)
 public function datas(){
    $dt=DB::select("SELECT  datass FROM DUAL");
    return   response()->json($dt);  
 }
 //return les villes d'une region avec le nbr ajouter
 public function regionsdatac(string $intitule_reg){
     $covid=DB::select("SELECT 
     r.regaf.ville  as ville,
     r.regaf.intitule_reg as region,
     r.regaf.cas_confirmed as confirmed,
     r.regaf.cas_geris as recovered ,
      r.regaf.cas_morts as deaths,
      r.updated_at as lastupdate
     FROM regacffect r 
     where r.regaf.intitule_reg='$intitule_reg'
     and  r.updated_at >=(sysdate-2)");
    return   response()->json($covid);
    
 }



 

//ajouter data par region par villes
 public function add( Request $request){
     $dt=DB::insert("CALL Inserett(121,'".$request->input('region')."','".$request->input('ville')."',".$request->input('confirmés').",".$request->input('géris').",".$request->input('morts').",'".$request->input('Date')."')");
     $msg='Bien ajouté';  
     return back()->withMessage($msg);
 }
//ajouter data sum
 public function add2( Request $request){
    $date=date('Y/m/d');
    $dt=DB::insert("CALL Inseretto(".$request->input('confirmés').",".$request->input('géris').",".$request->input('morts').",'".$date."')");
    $msg='Bien ajouté';  
    return back()->withMessage($msg);
}
}
