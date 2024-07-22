<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\User;
use Auth;
use Request;

class SearchController extends Controller {

	public function search_friend() {

		$gamer_email = Auth::user()->email;


		$data = User::select("name", "epicid", "epic_profile_id", "email", "valorantid")->
			Where('email', '!=', $gamer_email)
			->where(function ($queryy) use ($gamer_email) {
				$queryy->where("epicid", "LIKE", "%" . Request::get('query') . "%");
				$queryy->orWhere('valorantid', 'like', "%" . Request::get('query') . "%");
				$queryy->orWhere('email', 'like', "%" . Request::get('query') . "%");
			})->get()->toArray();


		// echo Request::get('query');
		return response()->json($data);
	}

}
