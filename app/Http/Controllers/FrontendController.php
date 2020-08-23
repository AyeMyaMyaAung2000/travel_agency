<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Package;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
        public function home($value=''){
        	$categories=Category::all();
        	$packages=Package::take(3)->get();
        return view('frontend.home',compact('categories','packages'));
}
 public function package(Request $request,$id)
 {
        
        	$categories=Category::all();
         //        dd($categories);
        	// $packages=Package::find($id);
                 $packages = DB::select('select * from packages where category_id = ?', [$id]);
                // dd($packages);
        return view('frontend.packages',compact('packages','categories'));
}
 public function packageall($value='')
 {
        
                $categories=Category::all();
                $packages=Package::all();
        return view('frontend.packages',compact('packages','categories'));
}

public function holiday1($value=''){
        	$categories=Category::all();
        	$packages=Package::all();
        return view('frontend.package.holiday1',compact('categories','packages'));
}
}
