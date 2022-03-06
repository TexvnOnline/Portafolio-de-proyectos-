<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUpdateRequest;
 
class ContactController extends Controller
{
    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact('contact'));
    }
    public function update(ContactUpdateRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->fill($request->all())->save();
        return back()->with('info','Contacto actualizado con exito.');
    }
}
