<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Evento;

class EventoController extends Controller
{
    public function index(Request $request)
    {
        //

        $buscar=$request->buscar;
        if($buscar==''){
            $sliders=Evento::orderBy('id','desc')->paginate(3);
        }else{
            $sliders=Evento::where('titulo','like','%'.$buscar.'%')->orderBy('id','desc')->paginate(3);
        }
        return [
            'pagination'=> [
                'total'=> $sliders->total(),
                'current_page'=> $sliders->currentPage(),
                'per_page'=> $sliders->perPage(),
                'last_page' => $sliders->lastPage(),
                'from' => $sliders->firstItem(),
                'to'=> $sliders->lastItem(),
            ],
            'sliders'=>$sliders
        ];

    }

    public function store(Request $request)
    {
       $exploded= explode(',',$request->algo);
       $decoded=base64_decode($exploded[1]);
       $imagen = getimagesize($request->algo);
       $ancho = $imagen[0];              //Ancho
       $alto = $imagen[1];

       if($ancho < 1499 && $alto< 499&& $ancho > 1900 && $alto > 800){

       return -1;
     }
 //Sacamos la información
 $imagen = getimagesize($request->algo);
  $ancho = $imagen[0];              //Ancho
  $alto = $imagen[1];
  if($ancho > 1499 && $alto > 499&& $ancho < 2000 && $alto < 800){
       $extension="";
            if(Str::contains($exploded[0],'jpeg')){
$extension="jpg";
            }else{
                $extension="png";
            }
           $fileName= Str::random().'.'.$extension;

           $path=public_path()."/img/".$fileName;
           file_put_contents($path,$decoded);

            $slider = new Evento();
            $slider->titulo=$request->titulo;
            $slider->url='img/'.$fileName;
            $slider->fecha=$request->fecha;
            $slider->lugar=$request->lugar;
            $slider->description=$request->contenido;

          if($slider->save()){
              return 1;
          }else {
              return 0;
          }

        }else{
            return -1;
        }
        }
        public function update(Request $request)
        {
            if($request->algo!=''){
            $imagen = getimagesize($request->algo);
            $ancho = $imagen[0];              //Ancho
            $alto = $imagen[1];

            if($ancho < 1499 || $alto < 499|| $ancho > 2000|| $alto > 800){
                return -2;
            }

        }
            $slider=Evento::where('id', '=', $request->id)->first();

            $slider->titulo=$request->titulo;

            $slider->fecha=$request->fecha;
            $slider->lugar=$request->lugar;
            $slider->description=$request->contenido;


          if($request->algo!=''){
              //elimino imagen antigua
              $mi_imagen = public_path().'/'.$slider->url;
    if (@getimagesize($mi_imagen)) {
        unlink($mi_imagen);
    }
    else
    {
    return 0;
    }
            $exploded= explode(',',$request->algo);
            $decoded=base64_decode($exploded[1]);
            $extension="";
                 if(Str::contains($exploded[0],'jpeg')){
            $extension="jpg";
                 }else{
                     $extension="png";
                 }
                $fileName= Str::random().'.'.$extension;

                $path=public_path()."/img/".$fileName;
                file_put_contents($path,$decoded);

            $slider->url='img/'.$fileName;

          }
          if($slider->save()){
            return 1;
        }else {
            return 0;
        }

        }
        public function destroy(Request $request)
        {
            $slider=Evento::where('id', '=', $request->id)->first();
     if($slider!=null){
        $mi_imagen = public_path().'/'.$slider->url;
        unlink($mi_imagen);
        $slider->delete();
        return 1;
     }else{
         return 0;
     }

}
}
