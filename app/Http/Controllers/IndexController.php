<?php

namespace App\Http\Controllers;

use App\Airport;
use App\chat;
use App\chatMessage;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function shoxab(){
        return view('shoxab');
    }
    public function lathis(){
        return view('lathis');
    }
    public function khursand(){
        return view('khursand');
    }
    public function farrukh(){
        return view('farrukh');
    }
    public function friend802000(){
        return view('friend802000');
    }
    public function umidochka(){
        return view('umidochka');
    }
    public function jontoshmatov(){
   
        return view('jontoshmatov.index');
    }
    public function chat(){
        return view('jontoshmatov.chat');
    }
    public function openchat(Request $request){
        $full_name = $request->full_name;
        $email_address = $request->email_address;
        $form_submitted = $request->form_submitted??false;
        $technician = $request->technician??false;

        if (!$form_submitted){
            return view('jontoshmatov.openchat');
        }

        $user = User::where('email', $email_address)->first();
        if (!$user){
            $createdUser = User::create([
                'email' => $email_address,
                'password' => bcrypt('business'),
                'nickname' => $full_name
            ]);
            $user->id = $createdUser->id;
        }
        $chat = chat::create([
            'full_name' => $full_name,
            'email_address' => $email_address,
            'user_id' => $user->id
        ]);
        if ($technician){
            return view('jontoshmatov.technicianopenchat',compact('user'));
        }
        return view('jontoshmatov.openchat',compact('user'));
    }

    public function getLiveChatTranscripts(){
        $chat = chat::find(1);
        $output = [];
       foreach ($chat->messages as $message){
           $output[] = [
               'id' => $message->chat_id,
               'technician_id' => $message->technician_id,
               'message' => $message->message,
               'user_id' => $chat->myuser->id,
               'avatar' => $message->myuser->avatar??'/img/user.png',
               'created_at' => date('M d, Y h:i A', strtotime($chat->created_at))
               ];
       }
       return $output;
    }
    public function saveLiveChatTranscripts(Request $request){
        $message = $request->message;
        $chat_id = $request->chat_id;
        $technician_id = $request->technician_id;
        $user_id = $request->user_id;
        $inserted = chatMessage::create([
            'chat_id' => $chat_id,
            'technician_id' => $technician_id,
            'message' => $message,
            'user_id' => $user_id,
        ]);
        return 1;
    }
}
