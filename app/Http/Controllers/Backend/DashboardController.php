<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CruiseThree;
use App\Models\CruiseFour;
use App\Models\SubMenu;
use App\Models\Slider;
use App\Models\Munu;
use Session;
use DB;
use URL;


class DashboardController extends Controller
{
    public function adminLogin()
    {
        return view('backend.auth.login');
    }
    public function adminDashboard(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
      

        $result = DB::table('admins')
                 ->where('email',$email)
                 ->where('password',$password)
                 ->first();
                 if($result){
                    Session::put('id',$result->id);
                    Session::put('name',$result->name);
                    Session::put('email',$result->email);
                    Session::put('role',$result->role);
                    return redirect()->route('dashboard');
                 }else{
                    dd("not");
                 }
    }
    public function Dashboard()
    {
        $data['menu'] = Munu::count();
        $data['subMenu'] = SubMenu::count();
        $data['sliders'] = Slider::count();
        $data['cruise3'] = CruiseThree::count();
        $data['cruise4'] = CruiseFour::count();
        // dd($data);
        return view('backend.dashboard', $data);
    }
    public function Logout(){
        Session::flush();
       return Redirect::to('/login');
    }
}
