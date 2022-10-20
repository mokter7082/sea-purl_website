<?php

namespace App\Http\Controllers;

use App\Models\HomeCruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Slider;
use Session;
use DB;

class HomeCruiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeCruise = HomeCruise::all();
        return view('backend.homeCruise.list',compact('homeCruise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.homeCruise.create');
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
        $data['title'] = $request->title ?? "";
        $data['description'] = $request->description ?? "";
        $image= $request->file('image');
        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='public/home_cruises';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
                $data['image']=$image_fullname;
                DB::table('home_cruises')->insert($data);
                Session::flash('message','Slider Saved');
                return redirect()->route('home-cruise.create')->with('success','Slider created successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeCruise  $homeCruise
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCruise $homeCruise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCruise  $homeCruise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeCruise = HomeCruise::find($id);
        return view('backend.homeCruise.edit',compact('homeCruise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCruise  $homeCruise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $slider =  HomeCruise::find($id);
        $slider->title = $request->title ?? "";
        $slider->description = $request->description ?? "";
        $slider->status = $request->input('status');
        $slider->save();
        return redirect()->route('home-cruise.index')->with('update','Cruise has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCruise  $homeCruise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeCruise = HomeCruise::findOrFail($id);
        $homeCruise->delete();
        return redirect()->route('home-cruise.index')->with('delete','Delete Success');
    }
}
