<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Model\Admin\Amount;
use App\Model\Completed_Games_List;
use App\Model\Wager;
use App\On_Going_Game_List;
use Auth;
use Illuminate\Http\Request;

class WagersController extends Controller {
	public function wager($slug) {

		return view('front.wager');
	}

	public function place_wager(Request $request) {
		
		// echo '<pre>';
		// print_r(json_decode(json_encode($request->all())));
		// die();
		$wager1 = new Wager();

		$gamer_email = Auth::user()->email;
		$gamer_slug = uniqid();
			$game_team = 'team1';
		$wager1->gamer_slug = $gamer_slug;
		$wager1->gamemode = $request->gamemode;
		$wager1->server = @Auth::user()->server;
		$wager1->amount = $request->amount;
		$wager1->vs_type = $request->team;
		$wager1->console = $request->console;
		$wager1->gamername = $gamer_email;
		$wager1->username = Auth::user()->id . ',';

		$prize = Amount::select('prize')->where('amount', $request->amount)->first();
		$wager1->prize = $prize['prize'];

		$wager1->status = '0';
		$wager1->public = $request->radioValue ? $request->radioValue : '0';
		$wager1->gpassword = $request->gpassword ? $request->gpassword : '';
		$check = Wager::where('gamername', $gamer_email)->where('status', '0')->count();

		// if update
		if ($check > 0) {

			$data = array('gamemode' => @$request->gamemode, 'server' => @Auth::user()->server, 'amount' => @$request->amount, 'vs_type' => @$request->team, 'console' => @$request->console, 'gamername' => @$gamer_email);

			$updated = Wager::where('gamername', $gamer_email)->update($data);

			$data = Wager::select('id')->where('gamername', $gamer_email)->first();
			$id = $data['id'];
       
			// $dt=$wager1->whereIn('gamername', $gamer_email)->update();
			if ($updated) {
				//echo $id;
						if($request->team == '1v1'){
							echo $id;
						}else{
							echo $id . '||' . $gamer_slug. '||' . $game_team;
						}
					
				}
				
			 else {
				echo 'false';
			}
		}

		// if insert
		else {
			if ($wager1->save()) {
				$id = $wager1->id;
					if($request->team == '1v1'){
					echo $id;
				}else{
					echo $id . '||' . $gamer_slug. '||' . $game_team;
				}
				// Redirect::route('confirm', $id);
				//echo $id;
			} else {
				echo 'false';
			}
		}
	}

	public function get_wager() {

		$gamername = Auth::user()->email;

		$check = Wager::where('gamername', $gamername)->where('status', '0')->count();

		if ($check > 0) {

			$wager_data = Wager::Where('gamername', $gamername)->where('status', '0')->first();

			$wager_data = json_encode($wager_data);

			return $wager_data;

		} else {
			return 'false';
		}
	}

	public function get_wager_list($slug) {

		@$gamername = Auth::user()->email;

		@$check = Wager::where('gamername', '!=', @$gamername)->count();

		if (@$check > 0) {

			if ($slug == "valorant") {
				$wager_data = Wager::where('gamername', '!=', @$gamername)->where('status', '=', '0')->where('gamemode', '=', 'Valorant')->get();
			} else {
				$wager_data = Wager::where('gamername', '!=', @$gamername)->where('status', '=', '0')->where('gamemode', '!=', 'Valorant')->get();
			}

			$wager_data = json_encode($wager_data);
			return $wager_data;
		} else {
			return 'false';
		}
	}

	public function delete_wager() {

		$gamername = Auth::user()->email;

		$check = Wager::where('gamername', '!=', $gamername)->count();

		if ($check > 0) {

			$data = Wager::where(['gamername' => $gamername])->delete();
			return "Success";
		} else {
			return "false";
		}
	}

	public function checkedBalance(Request $request) {
		$amount = $request->amounta;
		$dbValue = Auth::user()->user_balance;

		if ($amount > $dbValue) {
			return 'true';
		} else {
			return 'false';
		}
	}

	public function check_ingame() {
		$gamername = Auth::user()->email;
		$check = On_Going_Game_List::where('gamername', $gamername)->count();
		if ($check == "0") {
			echo "false";
		} else {
			$game_key = On_Going_Game_List::select('game_key')->where('gamername', $gamername)->first();

			$game_key = Wager::select('id')->where('gamer_slug', $game_key['game_key'])->first();

			return $game_key['id'];
		}
	}
	public function check_ingamedisputed() {
		$gamername = Auth::user()->email;
		$check = Completed_Games_List::where('gamername', $gamername)->where('dispute', '1')->count();
		if ($check == "0") {
			echo "false";
		} else {
			$game_key = Completed_Games_List::select('game_key')->where('gamername', $gamername)->where('dispute', '1')->first();
			return $game_key['game_key'];
		}
	}

	public function teamselect(Request $request) {
		$gamer_slug = $request->gamer_slug;
		$game_vs_type = On_Going_Game_List::select('vs_type')->where('game_key', $gamer_slug)->first();
		@$game_vs_type = $game_vs_type->vs_type;
		$team1count = On_Going_Game_List::where('game_key', $gamer_slug)->where('team', 'Team 1')->count();
		if ($team1count == '2') {
			$t1count = 'full';
		} else {
			$t1count = $team1count;
		}

		$team2count = On_Going_Game_List::where('game_key', $gamer_slug)->where('team', 'Team 2')->count();
		if ($team2count == '2') {
			$t2count = 'full';
		} else {
			$t2count = $team2count;
		}
		echo $t1count . '||' . $t2count . '||' . $game_vs_type;

	}
	public function check_dispute(Request $request) {
		$game_key = $request->game_key;
		echo $disputeCount = On_Going_Game_List::where('game_key', $game_key)->where('dispute', '1')->count();
	}
	public function cn_check_password(Request $request) {
		$cpass = $request->cpass;
		$team = $request->team;
		$gamer_slug = $request->gamer_slug;

		if ($team == '') {
			return 'blank';
		}

		$public_match_check = Wager::where('public', '0')->where('gamer_slug', $gamer_slug)->count();
		if ($public_match_check == '1') {
			return 'true';
		}

		$matchpass = Wager::where('gpassword', $cpass)->where('gamer_slug', $gamer_slug)->count();

		if ($matchpass == '0') {
			return 'false';
		} else {
			if ($team != '') {
				$getPasswordData = Wager::where('gpassword', $cpass)->where('gamer_slug', $gamer_slug)->first();
				$update = $getPasswordData->username . $gamername = Auth::user()->id . ',';

				$data = array('username' => $update);

				$updated = Wager::where('gamer_slug', $gamer_slug)->update($data);
				return 'true';
			}
		}

	}

	public function public_check(Request $request) {
		$game_slug_public_check = $request->game_slug_public_check;
		$getPublicData = Wager::where('gamer_slug', $game_slug_public_check)->where('public', '0')->count();
		if ($getPublicData == '1') {
			return 'false';
		} else {
			return 'true';
		}
	}

	public function get_start_timer_confirm(Request $request) {
		$gamer_email = Auth::user()->email;
		$check = Wager::select('created_at')->Where('gamer_slug', $request->game_key)->Where('gamername', $gamer_email)->orWhere('gamername', '!=', $gamer_email)->count();
		if ($check == "1") {
			$get_time = Wager::select('created_at')->Where('gamer_slug', $request->game_key)->Where('gamername', $gamer_email)->orWhere('gamername', '!=', $gamer_email)->get();
			// return date("Y-m-d h:i:sa", $get_time['0']['created_at']);
			$diff1 = $get_time['0']['created_at']->Format("Y-m-d H:i:s");
			$start_date = $diff1;
			$end_date = date('Y-m-d H:i:s');
			$timeLaps['sdate'] = $start_date;
			$timeLaps['edate'] = $end_date;
			return $timeLaps;
		} else {
			return $check;
		}
	}
}
