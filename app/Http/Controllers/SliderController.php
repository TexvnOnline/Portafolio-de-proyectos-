<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
 
class SliderController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:sliders.edit')->only(['edit','update']);
    }
    
    public function edit($id)
    {
        $slider = Slider::with('image')->where('id',$id)->firstOrFail();
        return view('admin.slider.edit', compact('slider'));
    }
    public function update(SliderUpdateRequest $request, $id)
    {
        $urlimagen = [];
        if($request->hasFile('imagen')){
            $imagen = $request->file('imagen');
               $nombre = time().'_'.$imagen->getClientOriginalName();
               $ruta = public_path().'/imagenes';
               $imagen->move($ruta, $nombre);
               $urlimagen['url'] ='/imagenes/'.$nombre;
        }
        $slider = Slider::findOrFail($id);
        $slider->text1 = $request->text1;
        $slider->text2 = $request->text2;
        $slider->button1 = $request->button1;
        $slider->button2 = $request->button2;
        $slider->save();

        $archivo = substr($slider->image->url,1);
        File::delete($archivo);
        $slider->image->delete();

        $slider->image()->create($urlimagen);
        return back()->with('info','Slider actualizado con exito.');
    }
}
