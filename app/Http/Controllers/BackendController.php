<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class BackendController extends Controller
{
   public function dashboard($value=''){
   	$categories=Category::all();
   	return view('backend.dashboard',compact('categories'));
   }

     public function profile($value='')
    {
	return view('backend.profile');
    }
}
