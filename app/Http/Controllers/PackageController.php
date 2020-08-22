<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Hotel;
use App\Car;
use App\Category;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $packages=Package::all();
        return view('backend.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $hotels=Hotel::all();
        $cars=Car::all();
        $categories=Category::all();
        return view('backend.packages.create',compact('hotels','cars','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        //validation
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
            'price'=>'required',
            'duration_time'=>'required',
            'description'=>'required',
            'hotel_id'=>'required',
            'car_id'=>'required',
            'category_id'=>'required',
        ]);

        // If include file(filename)
        $imageName=time().'.' .$request->photo->extension();
        $request->photo->move(public_path('backend/packageimg/'),$imageName);
        $myfile='backend/packageimg/' .$imageName;


        //data insert
        $package=new Package;
        $package->name = $request->name; 
        $package->photo = $myfile;
        $package->price = $request->price;
        $package->duration_time = $request->duration_time;
        $package->description = $request->description;
        $package->hotel_id = $request->hotel_id;
        $package->car_id = $request->car_id;
        $package->category_id = $request->category_id;
        $package->save();

        // Redirect

        return redirect()->route('packages.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         $hotels=Hotel::all();
        $cars=Car::all();
        $categories=Category::all();
        $package=Package::find($id);
        return view('backend.packages.show',compact('hotels','cars','categories','package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotels=Hotel::all();
        $cars=Car::all();
        $categories=Category::all();
        $package=Package::find($id);
       return view('backend.packages.edit',compact('hotels','cars','categories','package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //dd($request);
        //validation;
        
              $request->validate([
            'name'=>'required',
            'photo'=>'sometimes',
            'price'=>'required',
            'duration_time'=>'required',
            'description'=>'required',
            'car_id'=>'required',
            'hotel_id'=>'required',
            'category_id'=>'required',

        ]);

     
       
          
        //if include file,upload
        if ($request->hasFile('photo')){
             $imageName=time().'.' .$request->photo->extension();
         $request->photo->move(public_path('backend/packageimg'),$imageName);
         $myfile='backend/packageimg/' .$imageName;
         }else{
          $myfile=$request->oldphoto;
        }

         //data update
        $package=Package::find($id);//<==Items (model name)
        $package->name = $request->name; 
        $package->photo = $myfile;
        $package->price = $request->price;
        $package->duration_time = $request->duration_time;
        $package->description = $request->description;
        $package->hotel_id = $request->hotel_id;
        $package->car_id = $request->car_id;
        $package->category_id = $request->category_id;
        $package->save();

         // Redirect
         return redirect()->route('packages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $package=Package::find($id);
      $package->delete();
      //redirect
      return redirect()->route('packages.index');
    }
}
