<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Package;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
<<<<<<< HEAD
        public function home($value=''){
        	$categories=Category::all();
        	$packages=Package::take(3)->get();
                return view('frontend.home',compact('categories','packages'));
        }
        public function contact($value=''){
          return view('frontend.contact');
        }
        public function package(Request $request,$id)
        {
=======
  public function home($value=''){
   $categories=Category::all();
   $packages=Package::take(3)->get();
   return view('frontend.home',compact('categories','packages'));
 }
 public function package(Request $request,$id)
 {

   $categories=Category::all();
>>>>>>> ae2e90f01dce8b222642aff39bb8221a38347a86

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
  

   switch ($id) {
            case '1':
                return view('frontend.package.holiday1',compact('categories','package'));
                break;

             case '2':
               return view('frontend.package.bagan',compact('categories','package'));
                break;
            case '3':
               return view('frontend.package.bago',compact('categories','package'));
                break;
            case '4':
               return view('frontend.package.chin-hill',compact('categories','package'));
                break;
            case '5':
               return view('frontend.package.hpa-an',compact('categories','package'));
                break;
            case '6':
               return view('frontend.package.hyper',compact('categories','package'));
                break;
            case '7':
               return view('frontend.package.kalaw-treking',compact('categories','package'));
                break;
            case '8':
               return view('frontend.package.kharkarborazi',compact('categories','package'));
                break;
            case '9':
               return view('frontend.package.kyaikhtiyo',compact('categories','package'));
                break;
            case '10':
               return view('frontend.package.lawpita',compact('categories','package'));
                break;
            default:
              return view('frontend.package.holiday1',compact('categories','package'));
                break;
        }
<<<<<<< HEAD
        public function filter($value='')
    { 
      $packages=Package::all();
      $categories=Category::orderBy('id','desc')
          ->take(6)
          ->get();

       return view('frontend.filter',compact('packages','categories'));
    }

          public function getItems(Request $request)
    {
      $sid=$request->sid;

      if ($sid == 0) {
       $items = Package::all();
      }else{
      $items = Category::find($sid)->items;
    }
       return $items;

    }
=======
}
>>>>>>> ae2e90f01dce8b222642aff39bb8221a38347a86

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




