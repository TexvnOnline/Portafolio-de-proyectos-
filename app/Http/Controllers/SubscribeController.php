<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
 
class SubscribeController extends Controller
{
    public function store(Request $request){
        Mail::Send('emails.subscribe',$request->all(),function($smj){
            $smj->subject('Nuevo suscriptor a LANUBE');
            $smj->to('berserkersex@gmail.com');
        });
        Session::flash('message', 'La suscripción ha sido exitosa');
        return back();
    }
}
