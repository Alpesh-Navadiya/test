<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
// use Auth;
use App\Model\Completed_Games_List;
use App\Model\Terminated_Games_List;
use App\Model\Wager;
use App\On_Going_Game_List;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\send_requests;
class LobbyController extends Controller {

	//  go into confirm view and create ongoing list
	public function lobby($slug) {

		$users = \DB::select("select users.id, users.name, users.email, count(is_read) as unread
      from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
      where users.id != " . Auth::id() . "
      group by users.id, users.name, users.email");

		// return view('front.lobby', ['users' => $users]);

		$wager_count = Wager::Where('id', $slug)->count();
		if ($wager_count == 0) {
			return Redirect('wager/fortnite');
		}

		$wager_data = Wager::Where('id', $slug)->first();

		$check_confirmed = On_Going_Game_List::Where('game_key', $wager_data['gamer_slug'])->Where("confirmation", "0")->count();
		if ($check_confirmed != "0") {
			return Redirect('confirm/' . $slug);
		}

		$check_confirmed = On_Going_Game_List::Where('gamername', Auth::user()->email)->Where('game_key', $wager_data['gamer_slug'])->Where('game_over', '!=', '0')->count();
		if ($check_confirmed != "0") {
			return Redirect('wager/fortnite');
		}

		//confirm that user go into game

		$check = On_Going_Game_List::where('gamername', Auth::user()->email)->Where('game_key', $wager_data['gamer_slug'])->Where("confirmation_game_enter", "1")->count();

		if ($check == '0') {

			$data = array('confirmation_game_enter' => '1');
			$updated = On_Going_Game_List::where('gamername', Auth::user()->email)->Where('game_key', $wager_data['gamer_slug'])->update($data);

			$get_amount = Auth::user()->user_balance - $wager_data['amount'];
			$data_amount = array('user_balance' => $get_amount);
			User::where('email', Auth::user()->email)->update($data_amount);
			$trnTime = date('Y-m-d H:i:s');
			$transactiondata = array('gamername' => Auth::user()->email, 'mode' => $wager_data['gamemode'], 'amount' => $wager_data['amount'], 'balance' => '-', 'created_at' => $trnTime);
			\DB::table('transaction')->insert($transactiondata);

			// return view('front.lobby', ['users' => $users]);
			if ($wager_data['gamemode'] == "Valorant") {
				return view('front.lobby', compact(['wager_data', 'users']));
			} else {
				return view('front.fortnite_lobby', compact(['wager_data', 'users']));
			}
		} else {
			if ($wager_data['gamemode'] == "Valorant") {
				return view('front.lobby', compact(['wager_data', 'users']));
			} else {
				return view('front.fortnite_lobby', compact(['wager_data', 'users']));
			}
		}

	}

	// get current game info for login user
	public function get_current_game_info(Request $request) {

		$gamer_email = Auth::user()->email;
		$get_info = On_Going_Game_List::Where('game_key', $request->game_key)->get();

		$isdisputed = Completed_Games_List::Where('game_key', $request->game_key)->Where('dispute', '1')->count();
		if ($isdisputed >= "1") {
			return "disputed";
		} else {
			return $get_info;
		}

	}

	// get current game info for login user
	public function get_current_game_info_completed(Request $request) {

		$gamer_email = Auth::user()->email;
		$get_info = Completed_Games_List::Where('game_key', $request->game_key)->Where("game_over", "1")->count();

		if ($get_info == 0) {
			return $get_info;
		} else {

			$get_winner = Completed_Games_List::groupBy('sqard')->selectRaw('sqard,sum(score) as sum')->Where('game_key', $request->game_key)->orderBy('sum', 'desc')->get();

			return $get_winner[0];
		}
		$get_dispute_info = Completed_Games_List::Where('game_key', $request->game_key)->Where("dispute", "1")->count();
		if ($get_dispute_info == 1) {
			$gk = $request->game_key;
			return Redirect('disputedpage/$gk');
			//  window.location.href="{{ url('disputedpage') }}/<?php echo $wager_data->gamer_slug //;
		}

	}

	// enter a score for valorant
	public function score_enter(Request $request) {

		$gamer_email = Auth::user()->email;

		$data = array('score' => $request->score);

		$updated = On_Going_Game_List::where('gamername', $gamer_email)->where('game_key', $request->game_key)->update($data);

		if ($updated) {
			return 'Score Updated Successfully..';
		} else {
			return 'false';
		}
	}

	// confirm score
	public function confirm_score(Request $request) {

		$gamer_email = Auth::user()->email;
		$game_key = $request->game_key;

		$data = array('score_confirm' => '1');

		$updated = On_Going_Game_List::where('gamername', $gamer_email)->where('game_key', $game_key)->update($data);

		$all_user_confirmation = On_Going_Game_List::select('score_confirm')->where('game_key', $game_key)->get();

		$check_confirmation = "true";
		foreach ($all_user_confirmation as $key => $value) {
			if ($value->score_confirm == '0') {
				$check_confirmation = "false";
			}
		}
		if ($check_confirmation == "true") {

			$geme_data = array('game_over' => '1');
			On_Going_Game_List::where('game_key', $game_key)->update($geme_data);

			$completed_data = On_Going_Game_List::select()->where('game_key', $game_key)->get()->toArray();

			$get_winner = On_Going_Game_List::groupBy('sqard')->selectRaw('sqard,sum(score) as sum')->Where('game_key', $request->game_key)->orderBy('sum', 'desc')->get();

			$winner_squard = $get_winner[0]->sqard;

			foreach ($completed_data as $key => $value) {
				$completed = new Completed_Games_List();

				$completed->gamername = $value['gamername'];
				$completed->gamemode = $value['gamemode'];
				$completed->server = $value['server'];
				$completed->amount = $value['amount'];
				$completed->vs_type = $value['vs_type'];
				$completed->console = $value['console'];
				$completed->game_key = $value['game_key'];

				$completed->sqard = $value['sqard'];

				$get_amount = User::select('user_balance')->where('email', $completed->gamername)->first();
				if ($completed->sqard == $winner_squard) {
					$get_amount = $get_amount['user_balance'] + $value['prize'];
					$completed->result = 'W';

					// insert into transaction
					// $plusBal =  $value['prize'] + $value['amount'];
					$plusBal = $value['prize'];
					$trnTime = date('Y-m-d H:i:s');
					$transactiondata = array('gamername' => $value['gamername'], 'mode' => $value['gamemode'], 'amount' => $plusBal, 'balance' => '+', 'created_at' => $trnTime);
					\DB::table('transaction')->insert($transactiondata);
					// end
				} else {
					$get_amount = $get_amount['user_balance'];
					$completed->result = 'L';

					// insert into transaction
					// $trnTime = date('Y-m-d H:i:s');
					// $transactiondata = array('gamername'=>$value['gamername'],'mode'=>$value['gamemode'],'amount'=>$value['amount'],'balance'=>'-','created_at'=>$trnTime);
					//  \DB::table('transaction')->insert($transactiondata);
					// end
				}

				$data = array('user_balance' => $get_amount);
				User::where('email', $completed->gamername)->update($data);

				$completed->confirmation = $value['confirmation'];
				$completed->confirmation_game_enter = $value['confirmation_game_enter'];
				$completed->score = $value['score'];
				$completed->score_confirm = $value['score_confirm'];
				$completed->dispute = $value['dispute'];
				$completed->dispute_time = $value['dispute_time'];
				$completed->dispute_image = $value['dispute_image'];
				$completed->game_over = $value['game_over'];
				$completed->epic_profile_id = $value['epic_profile_id'];
				$completed->epicid = $value['epicid'];
				$completed->valorantid = $value['valorantid'];
				$completed->prize = $value['prize'];

				$completed->save();

			}

			On_Going_Game_List::where('game_key', $game_key)->delete();
			Wager::where('gamer_slug', $game_key)->delete();

		}

	}

	// dispute reqest
	public function dispute(Request $request) {

		$gamer_email = Auth::user()->email;
		$game_key = $request->dispute_game_key;

		$file = $request->file('dispute_image');
		$destinationPath = 'public/dispute/';

		$filename = $game_key . '_' . Auth::user()->id . '.' . $file->getClientOriginalExtension();
		$file_upload = $file->move($destinationPath, $filename);

		if ($file_upload) {
			$data = array('dispute' => 1, 'dispute_image' => $filename, 'dispute_time' => date("Y-m-d H:i:s"));

			$updated = On_Going_Game_List::where('game_key', $game_key)->where('game_key', $game_key)->update($data);
			$completed_data1 = On_Going_Game_List::where('game_key', $game_key)->where('dispute', '1')->get()->toArray();
			if ($updated) {
				foreach ($completed_data1 as $key => $value) {
					$completed1 = new Completed_Games_List();
					$completed1->gamername = $value['gamername'];
					$completed1->gamemode = $value['gamemode'];
					$completed1->server = $value['server'];
					$completed1->amount = $value['amount'];
					$completed1->vs_type = $value['vs_type'];
					$completed1->console = $value['console'];
					$completed1->game_key = $value['game_key'];
					$completed1->sqard = $value['sqard'];
					$completed1->confirmation = $value['confirmation'];
					$completed1->confirmation_game_enter = $value['confirmation_game_enter'];
					$completed1->score = $value['score'];
					$completed1->score_confirm = $value['score_confirm'];
					$completed1->dispute = $value['dispute'];
					$completed1->dispute_time = $value['dispute_time'];
					$completed1->dispute_image = $value['dispute_image'];
					$completed1->game_over = $value['game_over'];
					$completed1->epic_profile_id = $value['epic_profile_id'];
					$completed1->epicid = $value['epicid'];
					$completed1->valorantid = $value['valorantid'];
					$completed1->prize = $value['prize'];
					$completed1->save();
				}

				On_Going_Game_List::where('game_key', $game_key)->delete();
				Wager::where('gamer_slug', $game_key)->delete();
				return "Disputed Successfully...";
			} else {
				return "false";
			}
		} else {
			return "false";
		}
	}

	public function dispute_image(Request $request) {
		$gamer_email = Auth::user()->email;
		$game_key = $request->dispute_game_key;

		$file = $request->file('dispute_image');
		$destinationPath = 'public/dispute/';

		$filename = $game_key . '_' . Auth::user()->id . '.' . $file->getClientOriginalExtension();
		$file_upload = $file->move($destinationPath, $filename);

		if ($file_upload) {
			$data = array('dispute_image' => $filename, 'dispute_time' => date("Y-m-d H:i:s"));

			$updated = Completed_Games_List::where('gamername', $gamer_email)->where('dispute', '1')->where('game_key', $game_key)->update($data);

			if ($updated) {
				echo "Screenshot Updated Successfully...";
			} else {
				echo "false";
			}
		} else {
			echo "false";
		}
	}

	// for terminate game after time up
	public function terminate_game(Request $request) {

		$game_key = $request->game_key;
		$terminated_data = On_Going_Game_List::select()->where('game_key', $game_key)->get()->toArray();
			$dataDelete = send_requests::where(['game_key' => $game_key])->delete();

		foreach ($terminated_data as $key => $value) {
			$terminated = new Terminated_Games_List();

			$terminated->gamername = $value['gamername'];
			$terminated->gamemode = $value['gamemode'];
			$terminated->server = $value['server'];
			$terminated->amount = $value['amount'];
			$terminated->vs_type = $value['vs_type'];
			$terminated->console = $value['console'];
			$terminated->game_key = $value['game_key'];
			$terminated->sqard = $value['sqard'];
			$terminated->confirmation = $value['confirmation'];
			$terminated->confirmation_game_enter = $value['confirmation_game_enter'];
			$terminated->score = $value['score'];
			$terminated->score_confirm = $value['score_confirm'];
			$terminated->dispute = $value['dispute'];
			$terminated->dispute_time = $value['dispute_time'];
			$terminated->dispute_image = $value['dispute_image'];
			$terminated->game_over = $value['game_over'];
			$terminated->epic_profile_id = $value['epic_profile_id'];
			$terminated->epicid = $value['epicid'];
			$terminated->valorantid = $value['valorantid'];
			$terminated->prize = $value['prize'];

			if ($value['confirmation_game_enter'] == '1') {
				$terminated->save();
			}
		}

		On_Going_Game_List::where('game_key', $game_key)->delete();
		Wager::where('gamer_slug', $game_key)->delete();
		return "true";

	}

	// get satrt time form game start to timer in design view
	public function get_start_time(Request $request) {

		$gamer_email = Auth::user()->email;

		$check = On_Going_Game_List::select('created_at')->Where('game_key', $request->game_key)->Where('gamername', $gamer_email)->groupBy('game_key')->groupBy('created_at')->count();

		if ($check == "1") {

			$get_time = On_Going_Game_List::select('created_at')->Where('game_key', $request->game_key)->Where('gamername', $gamer_email)->get();

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

	public function disputedpage($key) {
		$key = $key;
		return view('front.disputedpage', compact('key'));
	}

}
