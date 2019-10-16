<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Str;
Use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $buscar=$request->buscar;
        if($buscar==''){
            $sliders=Slider::orderBy('id','desc')->paginate(3);
        }else{
            $sliders=Slider::where('titulo','like','%'.$buscar.'%')->orderBy('id','desc')->paginate(3);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

            $slider = new Slider();
            $slider->titulo=$request->titulo;
            $slider->url='img/'.$fileName;

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
            $slider=Slider::where('id', '=', $request->id)->first();

            $slider->titulo=$request->titulo;
            $slider->visibilidad=$request->visible;

            $numero = Slider::where('visibilidad', '=', 1)->count();
            if($slider->visibilidad==1){
                $numero=$numero-1;
            }
            if($numero > 1 && $request->visible==1){
                return -5;
            }else{
                $slider->visibilidad=$request->visible;

            }
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $slider=Slider::where('id', '=', $request->id)->first();
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
    public function slider(){
       $sliders=  Slider::where('visibilidad', '=', 1)->paginate(4);
       return $sliders->toArray();
    }
}
