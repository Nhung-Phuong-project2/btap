<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reader = Reader::all();
        return view('library.reader.index',compact('reader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.reader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reader = new Reader;
        $reader -> name = $request -> input('name');
        $reader -> phone = $request -> input('phone');
        $reader -> email = $request -> input('email');
        $reader -> address = $request -> input('address');
        return redirect() -> back() -> with('message','Add successfully!');
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
        $reader = Reader::find($id);
        return view('library.reader.edit', compact('reader'));
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
        $reader = Reader::find($id);
        $reader -> name = $request -> input('name');
        $reader -> phone = $request -> input('phone');
        $reader -> email = $request -> input('email');
        $reader -> address = $request -> input('address');
        $reader -> update();
        return redirect() -> back() -> with('message','Update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reader = Reader::find($id);
        $reader -> delete();
        return redirect() -> back() -> with('message','Delete successfully!');
    }
}
