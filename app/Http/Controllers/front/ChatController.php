<?php

namespace App\Http\Controllers\front;

use Auth;
use App\User;
use App\Message;
use Pusher\Pusher;

use App\On_Going_Game_List;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ChatController extends Controller
{
    public function index()
    {
        // select all users except logged in user
        // $users = User::where('id', '!=', Auth::id())->get();

        // count how many message are unread from the selected user
        $users = \DB::select("select users.id, users.name, users.email, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where users.id != " . Auth::id() . " 
        group by users.id, users.name, users.email");

        return view('front.lobby', ['users' => $users]);
    }

    public function getMessage(Request $request,$user_id,$chatkey)
    {
         $my_id = Auth::id();
      
       //  $msgtext = $request->message;

        $messages = Message::where('to', $my_id)->where('gamemode',$chatkey)->get();
        
        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
         $from = Auth::id();
        $to = $request->receiver_id;
       
       $message = $request->message;
       $gkey = $request->gkey;
       
      $getUsers = On_Going_Game_List::select('gamername')->Where('game_key',$gkey )->get();
    //    echo '<pre>';
    //    print_r(json_decode(json_encode($getUsers)));
    //    die();
    $user_email_array =array();
       foreach($getUsers as $usr){
        $user_email_array[] = User::select('id')->where('email', $usr->gamername)->get();
       }
       
          foreach($user_email_array as $userID){
            // echo '<pre>';
            // echo $userID[0]->id;
            // //print_r(json_decode(json_encode($userID)));
            // die();
        $data = new Message();
        $data->from = $from;
        $data->to = $userID[0]->id;;
        $data->message = $message;
        $data->gamemode = $gkey;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();
          }
        // pusher
        $options = array(
            'cluster' => 'mt1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
