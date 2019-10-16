<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Evento;
class GenericController extends Controller
{
    //
    public function index(){
       $cad= $this->slider();
       $eventos=$this->evento();
       $a=count($cad);
       $e=count($eventos);
       $s=$this->sliderI();
        return view('pagina/principal',compact("cad",'a','s','eventos','e'));
    }

    public function slider(){
        $a= Slider::get();

      return  $a->toArray();
     }
     public function evento(){
        $a= Evento::get();

      return  $a->toArray();
     }
     public function sliderI(){
        $a= Slider::get();
        $a=$a->toArray();
        $b=array();
        for($i=0;$i<count($a);$i++){


array_push ( $b ,$a[$i]['url'] );
        }
      return  $b;
     }
     public function infoevento(Request $request){
         $id=$request->id;
         $evento= Evento::where('id', '=', $request->id)->first();

         return view('pagina/eventoinfo',compact('evento'));
     }
}
