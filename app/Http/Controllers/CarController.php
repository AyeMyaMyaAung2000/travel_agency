<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
       return view('backend.cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cars=Car::all();
        return view('backend.cars.create',compact('cars'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return view('backend.brands.show');
         $request->validate([
           
            'name'=>'required',
            'photo'=>'required',
            'price'=>'required',
            
        ]);

        // If include file(filename)
        
        $imageName=time().'.' .$request->photo->extension();
        $request->photo->move(public_path('backend/carimg/'),$imageName);
        $myfile='backend/carimg/' .$imageName;
       
        $car=new Car;//<==Items (model name)
       
        $car->name = $request->name; 
        $car->photo = $myfile;
        $car->price=$request->price;
        
        $car->save();

        // Redirect

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car=Car::find($id);
        return view('backend.cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $car=Car::find($id);
        return view('backend.cars.edit',compact('car'));
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
        $request->validate([
            
            'name'=>'required',
            'photo'=>'sometimes',
            'price'=>'required',
          
        ]);
        //if include file,upload
        if ($request->hasFile('photo')){
             $imageName=time().'.' .$request->photo->extension();
      

         $request->photo->move(public_path('backend/carimg/'),$imageName);

        $myfile='backend/carimg/' .$imageName;
         @unlink($request->oldphoto);
         }else{
        $myfile=$request->oldphoto;
         }

         //data update
        $car=Car::find($id);//<==Items (model name)
      
        $car->name = $request->name; 
         $car->price = $request->price; 
         $car->photo = $myfile;
       
        $car->save();

         // Redirect
         return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car=Car::find($id);
        $car->delete();
      //redirect
      return redirect()->route('cars.index');
    }
}
