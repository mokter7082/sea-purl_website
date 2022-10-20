<?php

namespace App\Http\Controllers;

use App\Models\CruiseThree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
use DB;


class CruiseThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruises = CruiseThree::all();
      return view('backend.cruiseThree.list',compact('cruises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cruiseThree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['cabin_type'] = $request->cabin_type;
        $data['bed_type'] = $request->bed_type;
        $data['cabin_qty'] = $request->cabin_qty;
        $data['price_children'] = $request->price_children;
        $data['price_adult'] = $request->price_adult;
        $data['price_foreigner'] = $request->price_foreigner;
        $image= $request->file('image');
        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='public/cruise_three';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
                $data['image']=$image_fullname;
                DB::table('cruise_threes')->insert($data);
                return redirect()->route('cruise-three.create')->with('success','Cruise created successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CruiseThree  $cruiseThree
     * @return \Illuminate\Http\Response
     */
    public function show(CruiseThree $cruiseThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CruiseThree  $cruiseThree
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cruises = CruiseThree::find($id);
       return view('backend.cruiseThree.edit', compact('cruises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CruiseThree  $cruiseThree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cruise =  CruiseThree::find($id);
        $cruise->cabin_type = $request->input('cabin_type');
        $cruise->bed_type = $request->input('bed_type');
        $cruise->cabin_qty = $request->input('cabin_qty');
        $cruise->status = $request->input('status');
        $cruise->save();
        return redirect()->route('cruise-three.index')->with('update','update successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CruiseThree  $cruiseThree
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruise = CruiseThree::findOrFail($id);
        $cruise->delete();
        return redirect()->route('cruise-three.index')->with('delete','Delete Success');
    }
}
