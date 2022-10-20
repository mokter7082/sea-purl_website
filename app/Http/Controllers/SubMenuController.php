<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Munu;
use App\Models\SubMenu;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subMenus = SubMenu::all();
        return view('backend.subMenu.list',compact('subMenus')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Munu::all();
        return view('backend.subMenu.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $SubMenu = new SubMenu;
        $SubMenu->munu_id   = $request->parent_id;     
        $SubMenu->title   = $request->title;     
        $SubMenu->link    = $request->link;  
        $SubMenu->status  = $request->status;
        $SubMenu->save(); 
        return redirect()->route('sub-menu.create')->with('success','Sub Menu created successfully');
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
     $subMenu = SubMenu::find($id);
        return view('backend.subMenu.edit',compact('subMenu'));
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
        $subMenu =  SubMenu::find($id);
        $subMenu->title = $request->input('title');
        $subMenu->link = $request->input('link');
        $subMenu->status = $request->input('status');
        $subMenu->save();
       
        return redirect()->route('sub-menu.index')->with('update','Sub menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subMenu = SubMenu::findOrFail($id);
        $subMenu->delete();
        return redirect()->route('sub-menu.index')->with('update','Delete Success!');
    }
}
