<?php
namespace App\Http\Controllers\front;
use App\User;
use App\Model\Wager;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class IndexController extends Controller {
	public function index() {
		//$last3 = Wager::orderBy('id', 'DESC')->skip(0)->take(3)->get();
		return view('front.index');
	}

	public function login() {
		return view('front.login');
	}

	public function registration() {
		return view('front.registration');
	}

	public function addRegi(Request $request) {
		$user = new User();
		$str = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890#@';
		$str = str_shuffle($str);
		$token = substr($str, 0, 10);

		$user->name = $request->name;
		$user->slug = $request->name;
		$user->email = $request->email;
		if ($request->referer != "") {
			$user->invitation_link = urldecode(route('index') . '?invitation_token=' . $request->referer);
		} else {
			$user->invitation_link = null;
		}
		$user->invitation_status = '0';
		$user->password = bcrypt($request->password);
		$user->remember_token = $token;
		$user->user_balance = '0';
		$user->epicid = '';
		$user->epic_profile_id = '';
		$user->valorantid = '';
		$user->created_at = date("Y-m-d H:i:s");
		$user->pimage = '13.png';
		//$done = $user->save();
	
		$data=['email'=>$request->email,
			   'subject'=>'Veryfy Email Id',
			   'name'=>$request->name,
    		   'message'=>'test'  ];
    	Mail::send('emails.veryfyMail', $data,  function ($message) use($request)  {
			 
             $message->to($request->email, 'Receiver Name')
                     ->subject('Veryfy Email Id');
        });
        if (Mail::failures()) {
            // return failed mails
            return new Error(Mail::failures()); 
        }
        else {
			$done = $user->save();
			if ($done) {

				if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
					
					
					Session::put('frontlogin', $request->email);
					return 'true';
					
				}
				//echo 'true';
			}
            return 'Sent';
        }
       
		

	}

	public function createSlug($title, $id = 0) {
		$slug = Str::slug($title);
		$allSlugs = $this->getRelatedSlugs($slug, $id);
		if (!$allSlugs->contains('slug', $slug)) {
			return $slug;
		}

		$i = 1;
		$is_contain = true;
		do {
			$newSlug = $slug . '-' . $i;
			if (!$allSlugs->contains('slug', $newSlug)) {
				$is_contain = false;
				return $newSlug;
			}
			$i++;
		} while ($is_contain);
	}
	protected function getRelatedSlugs($slug, $id = 0) {
		return User::select('slug')->where('slug', 'like', $slug . '%')
			->where('id', '<>', $id)
			->get();
	}
	public function checkMail(Request $request) {
		$data = $request->all();
		$check = User::where('email', $data['email'])->count();
		if ($check > 0) {
			echo 'false';
		} else {
			echo 'true';
		}
	}

	public function checkEpic(Request $request) {
		$data = $request->all();
		$check = User::where('name', $data['name'])->count();
		if ($check > 0) {
			echo 'false';
		} else {
			echo 'true';
		}
	}

	public function userlogin(Request $request) {
		
		
	 	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
		
			
			Session::put('frontlogin', $request->email);
			return 'true';
			 
		} else {
			return 'false';
		}
	}
	public function updateProfile(Request $request) {
		$id = Auth::user()->id;

		$data = array('name' => $request->name_update, 'email' => $request->email_update, 'gamername' => $request->accountID_update, 'paypalemail' => $request->paypalemail,'valorantid'=>$request->valorantid);
		$updated = User::where('id', $id)->update($data);
		if ($updated) {return 'true';}
	}

	public function currentPasswordUpdate(Request $request) {
		$password = $request->current;
		$cpassword = user::where(['email' => Auth::user()->email])->first();
		if (Hash::check($password, $cpassword->password)) {
			$password1 = bcrypt($request->password_update);
			$changed = User::where(['email' => Auth::user()->email])->update(['password' => $password1]);
			if ($changed) {
				return 'true';
			}
		} else {
			return 'false';die();
		}

	}

	// public function veryfy_email($email){
	// 	$user_veryfy_date = date('Y-m-d H:i:s');
	// 	$data = array('email_verified_at' => $user_veryfy_date);
	// 	$updated = User::where('email', $email)->update($data);		
	// 	$all_transaction = '';
	// 	if($updated){
	// 		return view('front.user_profile',compact(['all_transaction']));        
	// 	}
	// }

}
