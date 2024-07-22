<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Auth;
use App\User;
use Request;

class SearchuserController extends Controller
{
        public function search_user(){

	    $data = User::select("email")->where("email","LIKE","%".Request::get('query')."%")->get()->toArray();

        // echo Request::get('query');
	    return response()->json($data);
    }
}
