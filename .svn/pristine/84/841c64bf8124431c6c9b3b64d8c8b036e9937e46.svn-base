<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Message;
use App\Model\Completed_Games_List;
use App\Model\Terminated_Games_List;
use App\Model\Admin\Admin_Chat;
use App\On_Going_Game_List;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Model\Wager;
class AdminController extends Controller {
	public function adminLogin() {
		return view('admin.admin_login');
	}

	public function loginProcess(Request $request) {
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1])) {
			echo 'yes';
		} elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 3])) {
			echo 'yes';
		} else {
			echo 'No';
		}
	}

	public function logout() {
		Session::flush();
		return redirect('/admin');
	}

	public function dashboard() {

		$data = array();

		$user_count = User::where('role', '==', '0')->count();
		$ongoing_count = On_Going_Game_List::groupBy(DB::raw('game_key'))->count();
		$completed_count = Completed_Games_List::where('dispute', '0')->groupBy(DB::raw('game_key'))->count();
		//$disputed_count = Completed_Games_List::groupBy(DB::raw('game_key'))->where('dispute', '1')->count();
			$disputed_count = Completed_Games_List::select('game_key','dispute')->distinct('game_key')->where('dispute', '=', '1')->count();

		$live = On_Going_Game_List::select('game_key', 'gamemode', 'server', 'confirmation', 'amount', 'console', 'vs_type')->distinct()->where('confirmation', '=', '1')->get();

		return view('admin.dashboard', compact('user_count', 'completed_count', 'ongoing_count', 'disputed_count', 'live'));

		// return view('admin.dashboard', compact('data'));
	}

	public function users() {
		$users = User::orderBy('id', 'DESC')->where('role', '!=', '1')->get();
		return view('admin.users', compact('users'));
	}

	public function livewager() {
		$live = On_Going_Game_List::select('game_key', 'gamemode', 'server', 'confirmation', 'amount', 'console', 'vs_type')->distinct()->where('confirmation', '=', '1')->get();
		return view('admin.livewager', compact('live'));
	}

	public function liveMatch($key) {
		$liveGamechat = Message::where('gamemode', $key)->orderBy('id', 'DESC')->get();
		return view('admin.liveGamechat', compact('liveGamechat'));
	}

	public function alltransaction($email) {
		//$usersEmail = User::select('email')->where('id', '=', $id)->first();
		$gamer_email = $email;
		$alltransaction = \DB::table('transaction')->where(['gamername' => $gamer_email])->orderBy('id', 'DESC')->get();
		return view('admin.alltransaction', compact('alltransaction'));
	}

	public function completedwager() {
		$completed = Completed_Games_List::select('gamemode', 'created_at', 'vs_type', 'amount', 'prize', 'score', 'game_key')->where('dispute', '0')->orderBy('id', 'desc')->groupBy(\DB::raw('game_key'))->get();
		return view('admin.completed', compact('completed'));
	}

	public function disputed() {
		$disputed = Completed_Games_List::select('game_key', 'gamemode', 'server', 'confirmation', 'amount', 'console', 'vs_type', 'dispute_image')->where('dispute', '=', '1')->distinct()->get();
		
		return view('admin.disputed', compact('disputed'));
	}

	public function disputed_data(){
		$disputed = Completed_Games_List::select('game_key', 'gamemode', 'server', 'confirmation', 'amount', 'console', 'vs_type', 'dispute_image')->where('dispute', '=', '1')->distinct()->get();
		return $disputed;
	}

	public function disputedgame($gamekey) {
		$disputedgame = Completed_Games_List::select('game_key', 'gamername', 'gamemode', 'score', 'sqard', 'dispute_image')->where('game_key', '=', $gamekey)->where('dispute', "1")->distinct()->get();
		return view('admin.disputedgame', compact('disputedgame'));
	}

	public function disputedscore(Request $request) {
		$gamekey = $request->gamekey;
		$scoreteam1 = $request->team1;
		$scoreteam2 = $request->team2;
		//data1 = array('score' => $request->code_amount);
		$d_data = Completed_Games_List::where('game_key', $gamekey)->where('dispute', "1")->get();
		foreach ($d_data as $value) {

			if ($value['sqard'] == "Team 1") {
				if ($scoreteam1 > $scoreteam2) {
					$status = "W";
					$assign_user_balance = User::select('user_balance')->where('email', $value['gamername'])->first();

					$assign_amount = $assign_user_balance['user_balance'] + $value['prize'];
					$assign_data = array('user_balance' => $assign_amount);
					$assign_update = User::where('email', $value['gamername'])->update($assign_data);
					$trnTime = date('Y-m-d H:i:s');
					$assign_transaction_data = array('gamername' => $value['gamername'], 'mode' => $value['gamemode'], 'amount' => $value['prize'], 'balance' => '+', 'created_at' => $trnTime);
					\DB::table('transaction')->insert($assign_transaction_data);

				} else {
					$status = "L";
				}

				$data = array('score' => $scoreteam1, 'result' => $status, 'game_over' => '1', 'dispute' => '0', 'confirmation' => '1');
			} else {

				if ($scoreteam1 > $scoreteam2) {
					$status = "L";
				} else {
					$status = "W";
					$assign_user_balance = User::select('user_balance')->where('email', $value['gamername'])->first();

					$assign_amount = $assign_user_balance['user_balance'] + $value['prize'];
					$assign_data = array('user_balance' => $assign_amount);
					$assign_update = User::where('email', $value['gamername'])->update($assign_data);
					$trnTime = date('Y-m-d H:i:s');
					$assign_transaction_data = array('gamername' => $value['gamername'], 'mode' => $value['gamemode'], 'amount' => $value['prize'], 'balance' => '+', 'created_at' => $trnTime);
					\DB::table('transaction')->insert($assign_transaction_data);

				}
				$data = array('score' => $scoreteam2, 'result' => $status, 'game_over' => '1', 'dispute' => '0', 'confirmation' => '1');

			}
			//echo $value['id'];
			$commited = Completed_Games_List::where('game_key', $gamekey)->where('id', $value['id'])->update($data);
			if ($commited) {
				//	return '1';
			}

		}

	}

	public function gamedetails($gamekey) {
		$gamedata_count = Completed_Games_List::select('*')->where('game_key', '=', $gamekey)->where('dispute', "0")->distinct()->count();

		if($gamedata_count){
			$gamedata = Completed_Games_List::select('*')->where('game_key', '=', $gamekey)->where('dispute', "0")->distinct()->get();
		}
		else{
			$gamedata = On_Going_Game_List::select('*')->where('game_key', '=', $gamekey)->where('dispute', "0")->distinct()->get();			
		}

		return view('admin.gamedetails', compact('gamedata'));
		
	}

	public function create_admin_view($email = null) {
		return view('admin.createadmin', compact('email'));
	}

	// create admin users
	public function create_admin(Request $request) {

		// name, email, passwoed, slug, remember_token, role
		$email = $request->email;
		$ipaddress = $request->ipaddress;

		// for update
		$updated = DB::table('users')->where('email', $email)->update([
			'email' => $email,
			'whitelistip' => $ipaddress,
			'role' => '3',
			'updated_at' => Carbon::now(),
		]);
		if ($updated) {
			echo "Added as Admin";
			$noti_array = array('noti_type'=>'Admin Role','noti_info'=>'Admin Assigned You  Admin Role ','noti_link'=>'#','noti_gamer'=>$email,'created_at' => Carbon::now());
			DB::table('notification')->insert($noti_array);
			
			
		} else {
			echo "false";
		}

	}

	public function assign_admin(Request $request) {

		$name = $request->email;

		$updated = DB::table('users')->where('email', $name)->update([
			'role' => '3',
			'updated_at' => Carbon::now(),
		]);
		if ($updated) {
			echo "Added As Admin";
			$noti_array = array('noti_type'=>'Admin Role','noti_info'=>'Admin Assigned You  Admin Role ','noti_link'=>'#','noti_gamer'=>$email,'created_at' => Carbon::now());
			DB::table('notification')->insert($noti_array);
		} else {
			echo "false";
		}
	}
	public function remove_admin(Request $request) {

		$name = $request->email;

		$updated = DB::table('users')->where('email', $name)->update([
			'role' => '0',
			'updated_at' => Carbon::now(),
		]);
		if ($updated) {
			echo "Removed As Admin";
			$noti_array = array('noti_type'=>'Admin Role','noti_info'=>'Admin Removed You as Admin Role ','noti_link'=>'#','noti_gamer'=>$name,'created_at' => Carbon::now());
			DB::table('notification')->insert($noti_array);
		} else {
			echo "false";
		}
	}

	//  read admin users
	public function read_adminusers(Request $request) {

		$data = array();
		$count = 1;

		$gamemodes = User::select('*')->where('role', '3')->get();
		if (!is_null($gamemodes)) {
			foreach ($gamemodes as $key => $value) {
				$id = "'" . $value->email . "'";
				$action = '<a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Remove Admin</a>';
				$data[] = array(
					'name' => $value->name,
					'email' => $value->email,
					'ipaddress' => $value->whitelistip,
					'id' => $action,
				);
				$count++;
			}

			$final_results = array(
				"draw" => "1",
				"recordsTotal" => count($data),
				"recordsFiltered" => $count,
				"data" => $data,
			);

			echo json_encode($final_results);
		}
	}

	// update admin Users
	public function update_adminusers(Request $request) {
		$data = array();
		$count = 1;

		$gamemodes = User::where("id", $request->uid)->first();

		return $gamemodes;
	}

	public function delete_adminusers(Request $request) {
		$data = array();
		$count = 1;

		$gamemodes = User::where("id", $request->uid)->delete();

		if ($gamemodes) {
			echo "Deleted";
		} else {
			echo "false";
		}
	}

	public function terminated() {
		//	$terminatedgame = Terminated_Games_List::select('*')->where('confirmation','1')->distinct()->get();

		$terminatedgame = Terminated_Games_List::select('gamername', 'gamer_id', 'gamemode', 'confirmation', 'vs_type', 'server', 'amount', 'prize', 'game_key')->groupBy(\DB::raw('game_key'))->where('confirmation', '=', '1')->get();
		return view('admin.terminated', compact('terminatedgame'));
	}

	public function terminateddetails($gamekey) {
		$gamedata = Terminated_Games_List::select('*')->where('game_key', '=', $gamekey)->distinct()->get();
		return view('admin.terminateddetails', compact('gamedata'));
	}

	// adminchat
	public function add_comment(Request $request) {
		$admin_chat = new Admin_Chat();
		$admin_email = Auth::user()->email;
		$admin_chat->admin_id = $admin_email;
		$admin_chat->game_key = $request->gamekey;
		$admin_chat->admin_comment = $request->comment;
		$admin_chat = $admin_chat->save();
		if ($admin_chat) {
			echo "Added";
		} else {
			echo "false";
		}
	}
	public function view_comment(Request $request){
		$gamekey = $request->key;
			$getComment = DB::table('admin_comment')->where('game_key', $gamekey)->get();
			return $getComment;		
	}

	public function admin_terminate_game(Request $request){

		 $game_key = $request->game_key; 
		$terminated_data = On_Going_Game_List::select()->where('game_key', $game_key)->count();

		if($terminated_data){
			$terminated_data = On_Going_Game_List::select()->where('game_key', $game_key)->get()->toArray();
		}
		else{
			$terminated_data = Completed_Games_List::select()->where('game_key', $game_key)->get()->toArray();			
		}
		
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

			$user_old_balance = User::select('user_balance')->where('email', $value['gamername'])->first();
			$user_balance = $user_old_balance['user_balance'] + $terminated->amount;

			$user_data = array('user_balance' => $user_balance);
			$update = User::where('email', $value['gamername'])->update($user_data);

			$terminated->save();
			}
		}

		On_Going_Game_List::where('game_key', $game_key)->delete();
		Completed_Games_List::where('game_key', $game_key)->delete();
		Wager::where('gamer_slug', $game_key)->delete();
		return "true";

	}

}