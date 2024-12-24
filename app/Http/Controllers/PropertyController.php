<?php

namespace App\Http\Controllers;

use App\Models\property_image;
use App\Models\property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $property = property::all();
       return view('allproperty',compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproperty');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required',
        ]);
       

       $property = new property();
       $property-> title = $data ['title'];
       $property-> description = $data ['description'];
       $property->dealer_id= Auth::id();
       $property->is_active= Auth::id();
       $property->Save();

       //$file = $request->file('photo');

       $path = $request->photo->store('image','public');

       $property_image= new property_image();
       $property_image-> property_id = $property->id;
       $property_image-> image_url = $path;
       $property_image->save();
       return redirect()->route('property.index')->with('status','image uploded successfully');
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
