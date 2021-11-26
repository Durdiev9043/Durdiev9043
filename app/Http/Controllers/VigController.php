<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VigController extends Controller
{
    public function index(){
        return view('viginere.index');
    }
    /**
     * @param  \Illuminate\Http\Request  $request
     */


    public function shifr(Request $request)
    {
        $matn=$request->matn;
        $kalit=$request->kalit;

        $l=strlen($matn);
        $kl=strlen($kalit);
        for ($i=0;$i<$l;$i++){
            $m=$kalit[$i%$kl];
             $z=ord($matn[$i])-64;
             $f=ord($m)-64;
             if ($z-$f>0){
                 $a=($z+$f)%26;
             }else{
                 $a=($f+$z-26)%26;
             }
             echo chr($a+64);
        }
    }
}
