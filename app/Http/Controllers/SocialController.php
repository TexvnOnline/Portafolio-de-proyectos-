<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Requests\SocialStoreRequest;
use App\Http\Requests\SocialUpdateRequest;
 
class SocialController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:socials.create')->only(['create','store']);
        $this->middleware('can:socials.edit')->only(['edit','update']);
        $this->middleware('can:socials.destroy')->only(['destroy']);
    }
    public function create()
    {
        return view('admin.social.create');
    }
    public function store(SocialStoreRequest $request)
    {
        $social = Social::create($request->all());
        return back()->with('info','Red social creada con exito.');
    }
    public function edit($id)
    {
        // return $id;
        $social = Social::where('id',$id)->firstOrFail();
        return view('admin.social.edit', compact('social'));
    }
    public function update(SocialUpdateRequest $request, $id)
    {
        $social = Social::find($id);
        $social->fill($request->all())->save();
        return back()->with('info','Red social actualizada con exito.');
    }
    public function destroy($id)
    {
        $social = Social::find($id)->delete();
        return back()->with('info', 'Red social eliminada con exito');
    }
}
