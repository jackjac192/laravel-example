<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){
		$messages= 
		[	
			[
				'id' => 1,
				'content' => 'Estes es mi primer mensaje',
				'image' =>'http://lorempixel.com/600/338?1'
			],
			[
				'id' => 2,
				'content' => 'Estes es mi segundo mensaje',
				'image' =>'http://lorempixel.com/600/338?2'
			],
			[
				'id' => 3,
				'content' => 'Estes es mi tercer mensaje',
				'image' =>'http://lorempixel.com/600/338?3'
			],
			[
				'id' => 4,
				'content' => 'Estes es mi cuarto mensaje',
				'image' =>'http://lorempixel.com/600/338?4'
			],			
			
		];

		$teacher = "Jackson Palacios";

		return view('welcome',[
			'messages' => $messages
		]);
	}

}
