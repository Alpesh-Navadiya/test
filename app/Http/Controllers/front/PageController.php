<?php

namespace App\Http\Controllers\front;
use Auth;
use Error;
use App\Model\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Session;
class PageController extends Controller
{
    

    public function faq(){
        return view('front.faq');
    }
    public function privacy_policy(){
        return view('front.privacy');
    }
    public function term_condition(){
        return view('front.tc');
    }
    public function contact(){
        return view('front.contact');
    }
    public function contactform(Request $request){
         $user = new Ticket();
            $user->subject = $request->subject;
            $user->epic = $request->epic;
            $user->email = $request->email;
            $user->message = $request->message;
            $user->created_at = date("Y-m-d H:i:s");
        $user->save();
        $data=['email'=>$request->email,
    		   'subject'=>$request->subject,
    		   'message'=>$request->message  ];
    	Mail::send('emails.contactMail', $data, function($message) {
             $message->to('alpesh.navadiya123@gmail.com', 'Receiver Name')
                     ->subject('Inquiry');
        });
        if (Mail::failures()) {
            // return failed mails
            return new Error(Mail::failures()); 
        }
        else {
            return 'Sent';
        }
        // $data=['email'=>$request->email,
    	// 		'subject'=>$request->subject,
    	// 		'message'=>$request->message];
    	// Mail::send('mail',$data,function($message) use($data){
    	// 	$message->from('dharit.creart@gmail.com','Dharit Maniar');
    	// 	$message->to($data['email']);
    	// 	$message->subject($data['subject']);
    	// });
    }
     
    public function profile(){
          //Session::put('alpesh','testsession');    
        return view('front.profile');         
    }

}
