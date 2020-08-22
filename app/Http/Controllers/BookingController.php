<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $books=Book::all();
        return view('backend.books.index',compact('books'));
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
        $bookingArr=json_decode($request->shop_data);

        $total=0;
        foreach ($bookingArr as $row ) {
          $total+=($row->price * $row->qty);
        }
       $book=new Book;
       $book->voucherno=uniqid();
       $book->depature_date=date('Y-m-d');
       $book->passenger=$request->passenger;
       $book->user_id=Auth::id();
       $book->package_id=id();
       $book->note=$request->notes;
       $order->total=$total;

       $order->save();//only save into order table

       //save into order _detail
       foreach ($cartArr as $row) {
            $order->items()->attach($row->id,['qty'=>$row->qty]);
       }

       return 'Succesful';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
