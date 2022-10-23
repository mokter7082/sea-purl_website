<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\CruiseThree;
use App\Models\CruiseFour;
use App\Models\HomeCruise;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use DB;


class FrontendController extends Controller
{
    public function homeView()
    {
      $data['sliders'] = Slider::where('status','Active')->get();
      // dd($data['sliders']);
      $data['cruise3'] = DB::table('cruise_threes')
                          ->where('status','Active')
                          ->orderBy('id', 'desc')
                          ->get();
      $data['homeCruise'] = DB::table('home_cruises')
                            ->where('status','Active')
                            ->orderBy('id', 'desc')
                            ->get();
      $data['galleries'] = DB::table('galleries')
                          ->where('status','Active')
                          ->orderBy('id', 'desc')
                          ->limit(6)
                          ->get();
      $data['video'] = DB::table('videos')
                          ->where('status','Active')
                          ->first();
                   
               return view('frontend.web',$data);
      }

    public function aboutUs()
    {
      $aboutData = DB::table('about_contents')
                  ->where('status','Active')
                  ->get();
      return view('frontend.pages.about-us',compact('aboutData'));
    }
    public function Sundarban()
    {
      $sundarbanData = DB::table('sundarbans')
      ->where('status','Active')
      ->get(); 

      return view('frontend.pages.sundarban',compact('sundarbanData'));
    }
    public function Bangladesh()
    {
      $torAttrData = DB::table('tourist_attractions')
      ->where('status','Active')
      ->get(); 
      return view('frontend.pages.bangladesh',compact('torAttrData'));
    }
    public function Cruise3 ()
    {
     $cruise3 =  DB::table('cruise_threes')
                ->where('status','Active')
                ->orderBy('id', 'desc')
                ->get();
    return view('frontend.pages.crouise-3',compact('cruise3'));
    }
    public function Cruise4 ()
    {
     $cruise4 = DB::table('cruise_fours')
              ->where('status','Active')
              ->orderBy('id', 'desc')
              ->get();
    return view('frontend.pages.crouise-4',compact('cruise4'));
    }

    // public function tourPackages ()
    // {
    //   $cruise3 =  DB::table('cruise_threes')
    //   ->where('status','Active')
    //   ->orderBy('id', 'desc')
    //   ->get();
    //  return view('frontend.pages.tour-packages',compact('cruise3'));
    // }
    public function tourPackagesCruise3()
    {
      $cruise3 =  DB::table('cruise_threes')
      ->where('status','Active')
      ->get();
      // dd($cruise3);
      return view('frontend.pages.tour-package-cuisise-3',compact('cruise3'));
    }
    public function tourPackagesCruise4()
    {
      $cruise4 = DB::table('cruise_fours')
      ->where('status','Active')
      ->get();
      return view('frontend.pages.tour-package-cuisise-4',compact('cruise4'));
    }
    public function contactUs ()
    {
      return view('frontend.pages.contact-us');
    }
    public function Offers ()
    {
      return view('frontend.pages.offers');
    }
    // extanal
    public function Gallery()
    {
      $data['cruise3_galley'] = DB::table('galleries')
                          ->where('cruise_type','cruise_3')
                          ->where('status','Active')
                          ->orderBy('id', 'desc')
                          ->get();

      $data['cruise4_galley'] = DB::table('galleries')
                          ->where('cruise_type','cruise_4')
                          ->where('status','Active')
                          ->orderBy('id', 'desc')
                          ->get();
              
      return view('frontend.pages.gallery',$data);
    }

    public function groupBooking()
    {
      return view('frontend.pages.group-booking');
    }
  public function downloadPdf()
  {
     return response()->download('public/frontend/pdf/foodmenu.pdf');
  }
  public function videoDetailsTouristAtt($id)
  {
    $singleData = DB::table('tourist_attractions')
              ->where('id',$id)
              ->first();
           
    return view('frontend.single_page.tourist-attraction',compact('singleData'));
  }
    
   
 

}
