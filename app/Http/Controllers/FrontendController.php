<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Package;

class FrontendController extends Controller
{
        public function home($value=''){
        	$categories=Category::all();
        	$packages=Package::take(3)->get();
        return view('frontend.home',compact('categories','packages'));
}
 public function package($value='')
 {
        // dd($value);
        	$categories=Category::all();
        	$packages=Package::all();
        return view('frontend.packages',compact('categories','packages'));
}
public function holiday1($value=''){
        	$categories=Category::all();
        	$packages=Package::all();
        return view('frontend.package.holiday1',compact('categories','packages'));
}
}
