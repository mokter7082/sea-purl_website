<?php

namespace App\Http\Controllers;

use App\Models\CruiseFour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
use DB;

class CruiseFourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruises = CruiseFour::all();
        return view('backend.cruiseFour.list',compact('cruises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cruiseFour.create');
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
            $upload_path ='public/cruise_four';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
                $data['image']=$image_fullname;
                DB::table('cruise_fours')->insert($data);
                return redirect()->route('cruise-four.create')->with('success','Cruise created successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CruiseFour  $cruiseFour
     * @return \Illuminate\Http\Response
     */
    public function show(CruiseFour $cruiseFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CruiseFour  $cruiseFour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cruises = CruiseFour::find($id);
        return view('backend.cruiseFour.edit',compact('cruises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CruiseFour  $cruiseFour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cruise =  CruiseFour::find($id);
        $cruise->cabin_type = $request->input('cabin_type');
        $cruise->bed_type = $request->input('bed_type');
        $cruise->cabin_qty = $request->input('cabin_qty');
        $cruise->status = $request->input('status');
        $cruise->save();
        return redirect()->route('cruise-four.index')->with('update','update successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CruiseFour  $cruiseFour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruise = CruiseFour::findOrFail($id);
        $cruise->delete();
        return redirect()->route('cruise-four.index')->with('delete','Delete Success');
    }
}
