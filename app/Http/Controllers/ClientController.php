<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    public function addClient(Request $request)
    {
        $unique_id = rand(time(), 10000);
        $data_array = array();
        $data_array['unique_id'] = $unique_id;
        $data_array['name'] = $request->name;
        $data_array['phone'] = $request->phone;
        $insertId = DB::table('clients')->insertGetId($data_array);
        $getUser = DB::table('clients')->where('id', $insertId)->first();
        if($getUser){
           return response()->json($getUser);
        }else{
            return response()->json([
                'status'=>404,
                'masage'=>'data faild'
            ]);
        }
       
    }
    public function storeMessage(Request $request)
    {  
        $msg      = str_replace("'", "", $request->textmsg);

        $mess_data = array();
        $mess_data['incoming_msg_id'] = $request->receive;
        $mess_data['outgoing_msg_id'] = $request->send;
        $mess_data['text_message'] = $msg ;
        $mess_data['curr_date'] = 11;
        $mess_data['curr_time'] =11;
        $id = DB::table('tbl_message')->insertGetId($mess_data);
       
        $getUser = DB::table('tbl_message')->where(['msg_id' => $id])->first();
       return response()->json($getUser);
    }
    public function chatLoader(Request $request)
    {
      $receive = $request->receive;
      $send = $request->send;
      $data = DB::select("SELECT *FROM tbl_message LEFT JOIN clients ON clients.unique_id = tbl_message.outgoing_msg_id 
      WHERE incoming_msg_id='$receive' AND outgoing_msg_id='$send' || outgoing_msg_id='$receive' AND 
      incoming_msg_id='$send' ORDER BY msg_id ASC");
      return response()->json($data);
    }
}
