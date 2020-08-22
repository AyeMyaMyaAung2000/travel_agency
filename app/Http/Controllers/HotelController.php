<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=Hotel::all();
       return view('backend.hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $hotels=Hotel::all();
        return view('backend.hotels.create',compact('hotels'));

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
        $request->photo->move(public_path('backend/hotelimg/'),$imageName);
        $myfile='backend/hotelimg/' .$imageName;
       
        $hotel=new Hotel;//<==Items (model name)
       
        $hotel->name = $request->name; 
        $hotel->photo = $myfile;
        $hotel->price=$request->price;
        
        $hotel->save();

        // Redirect

        return redirect()->route('hotels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $hotel=Hotel::find($id);
        return view('backend.hotels.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $hotel=Hotel::find($id);
        return view('backend.hotels.edit',compact('hotel'));
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
      

         $request->photo->move(public_path('backend/hotelimg/'),$imageName);

        $myfile='backend/hotelimg/' .$imageName;
         @unlink($request->oldphoto);
         }else{
        $myfile=$request->oldphoto;
         }

         //data update
        $hotel=Hotel::find($id);//<==Items (model name)
      
        $hotel->name = $request->name; 
         $hotel->price = $request->price; 
         $hotel->photo = $myfile;
       
        $hotel->save();

         // Redirect
         return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $hotel=Hotel::find($id);
        $hotel->delete();
      //redirect
      return redirect()->route('hotels.index');
    }
}
