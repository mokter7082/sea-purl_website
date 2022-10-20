<?php

namespace App\Http\Controllers;
use App\Models\Munu;
use Illuminate\Http\Request;


class MunuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Munu::all();

        return view('backend.menu.list',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('backend.menu.add-menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $menu = new Munu;
        $menu->title                = $request->title;     
        $menu->link              = $request->link;  
        $menu->status               = $request->status;
        $menu->save(); 
        return redirect()->route('menu.create')->with('success','Menu created successfully');
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
        $menu = Munu::find($id);
        return view('backend.menu.edit',compact('menu'));
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
       
        $menu =  Munu::find($id);
        $menu->title = $request->input('title');
        $menu->link = $request->input('link');
        $menu->status = $request->input('status');
        $menu->save();
       
        return redirect()->route('menu.index')->with('update','Menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Munu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('delete','Menu has been deleted!');
    }
}
