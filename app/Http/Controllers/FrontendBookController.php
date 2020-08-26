<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Package;
use App\Car;
use App\Hotel;
use App\User;
use Illuminate\Support\Facades\Auth;


class FrontendBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {  
     // dd($id);
        $cars=Car::all();
        $hotels=Hotel::all();
        $categories=Category::all();
        $package=Package::find($id); 
        $user=User::all();
        return view('frontend.booking.index',compact('user','hotels','cars','categories','package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // $request->validate([
       //      'codeno'=>'required|min:4',
       //      'name'=>'required',
       //      'photo'=>'required',
       //      'price'=>'required',
       //      'discount'=>'required',
       //      'description'=>'required',
       //      'brand'=>'required',
       //      'subcategory'=>'required'


       //  ]);


        $total=($request->car+$request->hotel+$request->price)*$request->passenger;

     // dd($request->id);
     // dd($request->car);
      // dd($request->hotel);
      // dd($request->package);
      // dd($request->passenger);

        //data insert
        $item=new Book;
         // $item->table-column=$request->form input type name;
        $item->depature_date=$request->depature_date;
        $item->voucherno=uniqid();
        $item->status=0;
        $item->note=$request->description;
        $item->passenger=$request->passenger;
        $item->total=$total;
        $item->user_id=Auth::id();
        $item->package_id=$request->id;
        $item->save();
       
        //redirect
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Category::all();
        return view('frontend.booking.show',compact('categories'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
