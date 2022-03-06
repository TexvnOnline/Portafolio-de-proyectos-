<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::orderBy('id','DESC')->paginate(20);
        return view('admin.service.index', compact ('services'));
    }
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(ServiceStoreRequest $request)
    {
        $urlimages = [];
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');
            foreach ($imagenes as $imagen) {
               $nombre = time().'_'.$imagen->getClientOriginalName();
               $ruta = public_path().'/imagenes';
               $imagen->move($ruta, $nombre);
               $urlimages[]['url'] ='/imagenes/'.$nombre;
            }
        }
        $file = $request->file('image');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $service = new Service;
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->shortDescription = $request->shortDescription;
        $service->longDescription = $request->longDescription;
        $service->icon = $request->icon;
        $service->image = $nombreimagen;
        $service->save();
        $service->images()->createMany($urlimages);

        return redirect()->route('services.edit',$service->id)->with('info','Servicio creado con exito.');
    }
    public function show($id)
    {
        $service = Service::with('images')->where('id',$id)->firstOrFail();
        return view('admin.service.show', compact('service'));
    }
    public function edit($id)
    {
        $service = Service::with('images')->where('id',$id)->firstOrFail();
        return view('admin.service.edit', compact('service'));
    }
    public function update(ServiceUpdateRequest $request, $id)
    {
        $urlimages = [];
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');
            foreach ($imagenes as $imagen) {
               $nombre = time().'_'.$imagen->getClientOriginalName();
               $ruta = public_path().'/imagenes';
               $imagen->move($ruta, $nombre);
               $urlimages[]['url'] ='/imagenes/'.$nombre;
            }
        }

        $file = $request->file('image');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->slug = $request->slug;
        $service->shortDescription = $request->shortDescription;
        $service->longDescription = $request->longDescription;
        $service->icon = $request->icon;
        $service->image = $nombreimagen;
        $service->save();
        $service->images()->createMany($urlimages);
        return redirect()->route('services.edit',$service->id)->with('info','Servicio actualizado con exito.');
    }
    public function destroy(Service $service)
    {
        $service = Service::with('images')->findOrFail($id);
        foreach($service->images as $image){
            $archivo = substr($image->url,1);
            File::delete($archivo);
            $image->delete();
        }
        $service->delete();
        return back()->with('info', 'Servicio eliminado con exito');
    }
}
