<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::orderBy('id','DESC')->paginate(20);
        return view('admin.tag.index', compact ('tags'));
    }
    public function create()
    {
        return view('admin.tag.create');
    }
    public function store(TagStoreRequest $request)
    {
        $tag = Tag::create($request->all());
        return redirect()->route('tags.edit',$tag->id)->with('info','Tag creado con exito.');
    }
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.show', compact('tag'));
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit', compact('tag'));
    }
    public function update(TagUpdateRequest $request, $id)
    {
        $tag = Tag::find($id);
        $tag->fill($request->all())->save();
        return redirect()->route('tags.edit',$tag->id)->with('info','Tag actualizado con exito.');
    }
    public function destroy($id)
    {
        $tag = Tag::find($id)->delete();
        return back()->with('info', 'Tag eliminado con exito');
    }
}
