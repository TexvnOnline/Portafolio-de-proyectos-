<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:categories.create')->only(['create','store']);
        $this->middleware('can:categories.index')->only(['index']);
        $this->middleware('can:categories.edit')->only(['edit','update']);
        $this->middleware('can:categories.show')->only(['show']);
        $this->middleware('can:categories.destroy')->only(['destroy']);
    }
    
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(20);
        return view('admin.category.index', compact ('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryStoreRequest $request)
    {
        $file = $request->file('imagen');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->image = $nombreimagen;
        $category->save();
        return redirect()->route('categories.edit',$category->id)->with('info','Categoria creada con exito.');
    }
    public function show($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        return view('admin.category.show', compact('category'));
    }
    public function edit($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        return view('admin.category.edit', compact('category'));
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        $file = $request->file('imagen');
        $nombreimagen = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/imagenes"),$nombreimagen);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->image = $nombreimagen;
        $category->save();

        return redirect()->route('categories.edit',$category->id)->with('info','Categoria actualizada con exito.');
    }
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
        return back()->with('info', 'Categoria eliminada con exito');
    }
}
