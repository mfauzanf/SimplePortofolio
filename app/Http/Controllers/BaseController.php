<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class BaseController extends Controller
{
    public function showHome()  {
      return view('home');
   }

    public function showMessage() {
     $messages = Message::all();
    $data = ['messages' => $messages];
    return view('message', $data);
    }


   public function testInput($input){
        dd($input);
   }

   public function storeMessage(Request $request){
        $messageObj = new Message;
	    $messageObj->name = $request->input('sentName');
		$messageObj->email = $request->input('sentEmail');
		$messageObj->phone = $request->input('sentNumber');
		$messageObj->message = $request->input('sentMessage');
		$messageObj->save();
		dd($messageObj);
   }


}
