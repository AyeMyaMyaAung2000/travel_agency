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
        public function contact($value=''){
          return view('frontend.contact');
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
// searchsection
       public function packagesearch(Request $request)
       {
        $categories=Category::all();
        $search= $request->search;
         // dd($search);
         
     // $packages = DB::select('select * from packages where name like ?', [$search]);
     // dd($packages);
      $packages = Package::where('name','LIKE','%'.$search.'%')->get();
     
    if(count($packages) > 0)
        return view('frontend.packages',compact('packages','categories'));
    else  return view('frontend.package.notfound',compact('packages','categories'));
}
// end search
// public function holiday1($value=''){
//        $categories=Category::all();
//        $packages=Package::all();
//        return view('frontend.package.holiday1',compact('categories','packages'));
// }


// packages detail

public function holiday1($id){
          $categories=Category::all();
          $package=Package::find($id);
                return view('frontend.package.holiday1',compact('categories','package'));
        }
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


}




