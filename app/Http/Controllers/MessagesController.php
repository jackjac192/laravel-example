<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message )
    {     	
    	return view('messages.show', [
    		'message' => $message
    	]);
    }

    public function create(Request $request){
    	$this->validate($request,[
    		'message' => ['required', 'max:140']
    	],
    	[
    		'message.required' => 'Por favor, escribe tu mensaje',
    		'message.max' => 'El mesnaje no puede superar los 140 caracteres'
    	]
    );
		return 'hola';
	}
}
