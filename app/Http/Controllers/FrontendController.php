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
public function contact($value='')
 {

  $categories=Category::all();
 
  return view('frontend.package.contact',compact('categories'));
}
// searchsection
public function packagesearch(Request $request)
{
  $categories=Category::all();
  $search= $request->search; 
  $packages = Package::where('name','LIKE','%'.$search.'%')->get();

  if(count($packages) > 0)
    return view('frontend.packages',compact('packages','categories'));
  else  return view('frontend.package.notfound',compact('packages','categories'));
}
public function holiday1($id){
  $categories=Category::all();
  $package=Package::find($id);
    return view('frontend.package.detail',compact('categories','package'));
 
}

public function filterpackage($value=''){
  $categories=Category::all();
  $packages=Package::all();
  return view('frontend.filterpackage',compact('categories','packages'));    
}

public function getitems(Request $request)
{ $sid=$request->sid; 
  $item=Package::all();
 if ($sid==0) {
  $item=Package::all();
}else{
  $item=Category::find($sid)->packages;
}
return $item;
}
}



