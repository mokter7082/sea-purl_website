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
        // dd($request->all());
        $data = array();
        $data['title'] = $request->title ?? "";
        $data['content'] = $request->content ?? "";
        $data['status'] = $request->status;
        DB::table('cruise_threes')->insert($data);
        return redirect()->route('cruise-three.create')->with('success','Created successfully');
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
        $cruise->title = $request->input('title');
        $cruise->content = $request->input('content');
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
