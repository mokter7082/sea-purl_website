<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebsiteUserController extends Controller
{
    public function storeGroupBooking(Request $request)
    {
       
      $data = array();
      $data['name'] = $request->name ?? "";
      $data['contact_number'] = $request->contact_number ?? "";
      $data['email'] = $request->email ?? "";
      $data['num_adult'] = $request->num_adult ?? "";
      $data['num_child_2_5_year'] = $request->num_child_2_5_year ?? "";
      $data['num_child_5_10_year'] = $request->num_child_5_10_year ?? "";
      $data['page'] = $request->page ?? "";
      $data['org_name'] = $request->org_name ?? "";
      $data['how_many_people'] = $request->how_many_people ?? "";
      $data['shift_date'] = $request->date ?? "";
       $insert = DB::table('group_booking')->insert($data);
       return redirect()->route('group-booking')->with('success','Your submission has been sent');
    }
    public function groupBookinguser()
    {
      $bookingUser = DB::table('group_booking')->get();
      return view('backend.website_user.group-booking',compact('bookingUser'));
    }
}
