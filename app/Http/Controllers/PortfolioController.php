<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Portfolio;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioStoreRequest;
use App\Http\Requests\PortfolioUpdateRequest;

class PortfolioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:portfolios.create')->only(['create','store']);
        $this->middleware('can:portfolios.index')->only(['index']);
        $this->middleware('can:portfolios.edit')->only(['edit','update']);
        $this->middleware('can:portfolios.show')->only(['show']);
        $this->middleware('can:portfolios.destroy')->only(['destroy']);
    }
    public function index()
    {
        $portfolios = Portfolio::orderBy('id','DESC')->paginate(20);
        return view('admin.portfolio.index', compact ('portfolios'));
    }
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();
        return view('admin.portfolio.create', compact('categories','tags'));
    }
    public function store(PortfolioStoreRequest $request)
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

        $portfolio = new Portfolio;
        $portfolio->category_id = $request->category_id;
        $portfolio->name = $request->name;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->skills = $request->skills;
        $portfolio->client = $request->client;
        $portfolio->url = $request->url;
        $portfolio->image = $nombreimagen;
        $portfolio->save();
        $portfolio->images()->createMany($urlimages);
        $portfolio->tags()->attach($request->get('tags'));
        return redirect()->route('portfolios.edit',$portfolio->id)->with('info','Portafolio creado con exito.');
    }
    public function show($id)
    {
        $portfolio = Portfolio::with('images','category','tags')->where('id',$id)->firstOrFail();
        return view('admin.portfolio.show', compact('portfolio'));
    }
    public function edit($id)
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->get();
        $portfolio = Portfolio::with('images')->where('id',$id)->firstOrFail();
        return view('admin.portfolio.edit', compact('portfolio','categories','tags'));
    }
    public function update(PortfolioUpdateRequest $request, $id)
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

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->category_id = $request->category_id;
        $portfolio->name = $request->name;
        $portfolio->slug = $request->slug;
        $portfolio->description = $request->description;
        $portfolio->skills = $request->skills;
        $portfolio->client = $request->client;
        $portfolio->url = $request->url;
        $portfolio->image = $nombreimagen;
        $portfolio->save();
        $portfolio->images()->createMany($urlimages);
        $portfolio->tags()->sync($request->get('tags'));
        return redirect()->route('portfolios.edit',$portfolio->id)->with('info','Portafolio actualizado con exito.');
    }
    public function destroy($id)
    {
        $portfolio = Portfolio::with('images')->findOrFail($id);
        foreach($portfolio->images as $image){
            $archivo = substr($image->url,1);
            File::delete($archivo);
            $image->delete();
        }
        $portfolio->delete();
        return back()->with('info', 'Portafolio eliminado con exito');
    }
}
