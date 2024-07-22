<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDetailsAdminController extends Controller
{
	public function createuserdetailsview($email = null) {
		return view('admin.changeuserdetails', compact('email'));
	}

	public function get_userdata(Request $request){
		$user_email = $request->uid;
		$user_old_balance = User::select('epicid','valorantid')->where('email', $user_email)->first();

		return $user_old_balance;
	}


	public function changeuserinfo(Request $request){

		$user_email = $request->email;

		$data = array('valorantid' => $request->valorantid,'epicid' => $request->epicid);

		$updated = User::where('email', $user_email)->update($data);

		if ($updated) {
			return 'Updated Successfully...';
		} else {
			return 'false';
		}

	}
}
