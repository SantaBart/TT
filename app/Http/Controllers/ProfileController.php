<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
	public function profile(){
		return view('profile',array('user' =>Auth::user()));
	}
	public function update_pic(Request $request)
	{
		
		
	}
}
