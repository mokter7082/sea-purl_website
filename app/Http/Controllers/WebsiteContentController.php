<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class WebsiteContentController extends Controller
{
    public function createContent()
    {
        return view('backend.about_content.create');
    }
    public function storeAboutContent(Request $request)
    {
       $data = array();
       $data['title'] = $request->title ?? "";
       $data['content'] = $request->content ?? "";
       $data['status'] = $request->status ?? "";
       $insert = DB::table('about_contents')->insert($data);
       return redirect()->route('create_content')->with('success','Content created successfully');
    }
    public function listAboutContent()
    {
        $aboutData = DB::table('about_contents') ->get();
       
        return view('backend.about_content.list',compact('aboutData'));
    }
    public function AboutContentEdit($id)
    {
        $aboutData = DB::table('about_contents')
        ->where('id',$id)
        ->first();
      
       return view('backend.about_content.edit',compact('aboutData'));
    }
    public function AboutContentUpdate(Request $request,$id)
    {
        $data = array();
        $data['title'] = $request->title ?? "";
        $data['content'] = $request->content ?? "";
        $data['status'] = $request->status ?? "";
  
        $aboutData = DB::table('about_contents')
                    ->where('id',$id)
                    ->update($data);
         return redirect()->route('list_about_content')->with('success','Content update successfully'); 
    }
    public function createTouristContent()
    {
        return view('backend.tourist_attractions.create');
    }
    public function storeTouristAttraction(Request $request)
    {
        // dd($request->all());
        $data = array();
        $data['title'] = $request->title ?? "";
        $data['content'] = $request->content ?? "";
        $data['img_position'] = $request->img_position ?? "";
        $data['status'] = $request->status ?? "Active";
        $image= $request->file('image');
        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='public/content_img/tourist_attrations';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
                $data['image']=$image_fullname;
                DB::table('tourist_attractions')->insert($data);
                return redirect()->route('create_to_attraction')->with('success','Content created successfully');
            }
        }
    }
    public function listTouristAttraction()
    {
        $touristAttraction = DB::table('tourist_attractions')->get();
       
        return view('backend.tourist_attractions.list',compact('touristAttraction'));
    }
    public function TouristAttractionEdit($id)
    {
        $touristAttraction = DB::table('tourist_attractions')
        ->where('id',$id)
        ->first();
      
       return view('backend.tourist_attractions.edit',compact('touristAttraction'));
    }
    public function TouristAttractionUpdate(Request $request,$id)
    {
        $data = array();
        $data['title'] = $request->title ?? "";
        $data['content'] = $request->content ?? "";
        $data['img_position'] = $request->img_position ?? "";
        $data['status'] = $request->status ?? "";
  
        $aboutData = DB::table('tourist_attractions')
                    ->where('id',$id)
                    ->update($data);
         return redirect()->route('list_tourist_attraction')->with('success','Content update successfully'); 
    }

    //sundarban
    public function createSundarban()
    {
        return view('backend.sundarban.create');
    }
    public function storeSundarbanContent(Request $request)
    {
      
       $data = array();
       $data['title'] = $request->title ?? "";
       $data['content'] = $request->content ?? "";
       $data['status'] = $request->status ?? "";
       $insert = DB::table('sundarbans')->insert($data);
       return redirect()->route('create_sundarban')->with('success','Content created successfully');
    }
    public function listSundarbantContent()
    {
        $sundarbanData = DB::table('sundarbans') ->get();
       
        return view('backend.sundarban.list',compact('sundarbanData'));
    }
    public function SundarbantContentEdit($id)
    {
        $sundarbanData = DB::table('sundarbans')
        ->where('id',$id)
        ->first();
      
       return view('backend.sundarban.edit',compact('sundarbanData'));
    }
    public function SundarbanContentUpdate(Request $request,$id)
    {
        $data = array();
        $data['title'] = $request->title ?? "";
        $data['content'] = $request->content ?? "";
        $data['status'] = $request->status ?? "";
  
        $aboutData = DB::table('sundarbans')
                    ->where('id',$id)
                    ->update($data);
         return redirect()->route('list_sundarbant_content')->with('success','Content update successfully'); 
    }

       //tour package cruise 3 place
       public function createTPCruise3Content()
       {
           return view('backend.t_p_cruise_3.create');
       }
       public function storeTPCruise3(Request $request)
       {

          $data = array();
          $data['title'] = $request->title ?? "";
          $data['content'] = $request->content ?? "";
          $data['status'] = $request->status ?? "";
          $insert = DB::table('t_p_crouise_3')->insert($data);
          return redirect()->route('create_t_p_cruise_3')->with('success','Content created successfully');
       }
       public function listTPCruise3()
       {
           $tourPackCruise3 = DB::table('t_p_crouise_3') ->get();
          
           return view('backend.t_p_cruise_3.list',compact('tourPackCruise3'));
       }
       public function TPCruise3Edit($id)
       {
           $tourPackCruise3Edit = DB::table('t_p_crouise_3')
           ->where('id',$id)
           ->first();
         
          return view('backend.t_p_cruise_3.edit',compact('tourPackCruise3Edit'));
       }
       public function TPCruise3Update(Request $request,$id)
       {
           $data = array();
           $data['title'] = $request->title ?? "";
           $data['content'] = $request->content ?? "";
           $data['status'] = $request->status ?? "";
     
           $tpPackag = DB::table('t_p_crouise_3')
                       ->where('id',$id)
                       ->update($data);
            return redirect()->route('list__t_p_cruise_3')->with('success','Content update successfully'); 
       }



        //tour package cruise 3 features
        public function createTPCruise3FeaturesContent()
        {
 
            return view('backend.t_p_cruise_3_features.create');
        }
        public function storeTPCruise3Features(Request $request)
        {
 
           $data = array();
           $data['title'] = $request->title ?? "";
           $data['content'] = $request->content ?? "";
           $data['status'] = $request->status ?? "";
           $insert = DB::table('t_p_crouise_3_features')->insert($data);
           return redirect()->route('create_t_p_cruise_3_features')->with('success','Content created successfully');
        }
        public function listTPCruise3Features()
        {
            $tourPackCruise3Features = DB::table('t_p_crouise_3_features') ->get();
           
            return view('backend.t_p_cruise_3_features.list',compact('tourPackCruise3Features'));
        }
        public function TPCruise3FeaturesEdit($id)
        {
            $tourPackCruise3EditFeature = DB::table('t_p_crouise_3_features')
            ->where('id',$id)
            ->first();
          
           return view('backend.t_p_cruise_3_features.edit',compact('tourPackCruise3EditFeature'));
        }
        public function TPCruise3FeaturesUpdate(Request $request,$id)
        {
            $data = array();
            $data['title'] = $request->title ?? "";
            $data['content'] = $request->content ?? "";
            $data['status'] = $request->status ?? "";
      
            $tpPackag = DB::table('t_p_crouise_3_features')
                        ->where('id',$id)
                        ->update($data);
             return redirect()->route('list__t_p_cruise_3_features')->with('success','Content update successfully'); 
        }
   











}
