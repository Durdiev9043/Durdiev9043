<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class RSAController extends Controller
{
    public function index(){
        return view('RSA.index');
    }
/**
    * @param  \Illuminate\Http\Request  $request
 */


    public function shifr(Request $request){
    $q=$request->q;
    $p=$request->p;
    $e=$request->e;
    $matn=strtoupper($request->matn);
    $n=$q*$p;
    $l=strlen($matn);
    for ($i=0;$i<$l;$i++){
        $shifr=chr((pow ( ( ord($matn[$i])-64), $e ) )%$n+64);
        echo $shifr;
    }


    }
}
