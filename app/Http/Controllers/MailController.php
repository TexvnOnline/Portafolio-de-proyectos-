<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
 
class MailController extends Controller
{
    public function store(Request $request){
        Mail::Send('emails.contact',$request->all(),function($smj){
            $smj->subject('Correo de contacto');
            $smj->to('berserkersex@gmail.com');
        });
        Session::flash('message', 'Menasaje enviado con exito');
        return redirect('/contact');
    }

}
