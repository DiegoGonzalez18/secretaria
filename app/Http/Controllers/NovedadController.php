<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedad;
use Illuminate\Support\Str;
Use Illuminate\Support\Facades\DB;
class NovedadController extends Controller
{
    //
    public function store(Request $request)
    {
       $exploded= explode(',',$request->algo);
       $decoded=base64_decode($exploded[1]);
       $imagen = getimagesize($request->algo);

  if(true){
       $extension="";
            if(Str::contains($exploded[0],'pdf')){
$extension="pdf";
            }else{
                $extension="pdf";
            }
           $fileName= Str::random().'.'.$extension;

           $path=public_path()."/pdf/".$fileName;
           file_put_contents($path,$decoded);

            $slider = new Novedad();
            $slider->titulo=$request->titulo;
            $slider->url='pdf/'.$fileName;
            $slider->description=$request->contenido;

          if($slider->save()){
              return 1;
        }
        }
    }
    public function index(Request $request)
    {
        //

        $buscar=$request->buscar;
        if($buscar==''){
            $sliders=Novedad::orderBy('id','desc')->paginate(3);
        }else{
            $sliders=Novedad::where('titulo','like','%'.$buscar.'%')->orderBy('id','desc')->paginate(3);
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
    public function update(Request $request)
        {

            $slider=Novedad::where('id', '=', $request->id)->first();

            $slider->titulo=$request->titulo;

            $slider->description=$request->contenido;

          if($request->algo!=''){
              //elimino imagen antigua
              $mi_imagen = public_path().'/'.$slider->url;

        unlink($mi_imagen);


            $exploded= explode(',',$request->algo);
            $decoded=base64_decode($exploded[1]);
            $extension="";
                 if(Str::contains($exploded[0],'jpeg')){
            $extension="pdf";
                 }else{
                     $extension="pdf";
                 }
                $fileName= Str::random().'.'.$extension;

                $path=public_path()."/pdf/".$fileName;
                file_put_contents($path,$decoded);
                $slider->url='pdf/'.$fileName;

          }
          if($slider->save()){
            return 1;
        }else {
            return 0;
        }

        }
        public function destroy(Request $request)
        {
            $slider=Novedad::where('id', '=', $request->id)->first();
     if($slider!=null){
        $mi_imagen = public_path().'/'.$slider->url;
        unlink($mi_imagen);
        $slider->delete();
        return 1;
     }else{
         return 0;
     }
    // Lo eliminamos de la base de datos



        }
}
