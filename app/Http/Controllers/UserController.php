<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        $users =User::paginate();
        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(UserStoreRequest $request)
    {
        // $user = User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>bcrypt($request->password),
        // ]);
        return redirect()->route('users.edit',$user->id)->with('info','Usuario creado con exito.');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        return view('admin.user.edit', compact('user','roles'));
    }
    public function update(UserUpdateRequest $request, $id)
    {
        // $user = User::find($id);
        // $user->update($request->all());
        // $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.edit',$user->id)->with('info', 'Usuario actualizado con exito');
    }
    public function destroy($id)
    {
        // $user = User::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
