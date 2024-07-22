<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
// use Auth;
use App\Model\Wager;
use App\On_Going_Game_List;
use App\send_requests;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class ConfirmController extends Controller {

	//  go into confirm view and create ongoing list
	public function confirm(Request $request, $slug, $team = NULL) {
        $wager_count = Wager::Where('id', $slug)->count();
		if ($wager_count == 0) {
			
			$dataDelete = On_Going_Game_List::Where('gamername', Auth::user()->email)->delete();
			return Redirect('wager/fortnite');
		}

		$wager_data = Wager::Where('id', $slug)->first();
		$game_key = $wager_data['gamer_slug'];
		$vs_type = $wager_data['vs_type'];
		$game_info_amount = $wager_data['amount'];
		$game_info_mode = $wager_data['gamemode'];

		$gamer_slug = $wager_data['gamer_slug'];
		$gamername = Auth::user()->email;
		$gamer_info = User::select('user_balance', 'epicid', 'epic_profile_id', 'valorantid','email_verified_at')->where('email', $gamername)->first();

		

		if ($gamer_info->user_balance < $game_info_amount) {
			return Redirect('userprofile');
			die();
		}
		
		if ($gamer_info->email_verified_at == "" || $gamer_info->email_verified_at == NULL) {
			return Redirect('userprofile');
			die();
		}
		
		
		if ($game_info_mode == "Valorant") {
			if ($gamer_info->valorantid == "" || $gamer_info->valorantid == null) {
				return Redirect('userprofile');
				die();
			}
		} else {
			if ($gamer_info->epicid == "" || $gamer_info->epicid == null) {
				return Redirect('userprofile');
				die();
			}
			if ($gamer_info->epic_profile_id == "" || $gamer_info->epic_profile_id == null) {
				return Redirect('userprofile');
				die();
			}
		}

		$check = On_Going_Game_List::Where('confirmation_game_enter', '1')->where('game_over', '0')->where('game_key', $game_key)->count();
		if ($check >= '1') {
			return Redirect('lobby/' . $wager_data['id']);
		}

		if ($vs_type == "2v2") {
			$private = $wager_data['public'];
			if ($private == "1") {
				$find = "0";
				$private_users = $wager_data['username'];
				$str_explode = explode(",", $private_users);
				foreach ($str_explode as $user_find) {
					$user_find = trim($user_find);
					if ($user_find == Auth::user()->id) {
						$find = "1";
					}
				}
				if ($find == "0") {
					return Redirect('userprofile');
				}
			}
		}

		$check = On_Going_Game_List::Where('gamername', Auth::user()->email)->where('game_over', '==', '0')->where('game_key', $game_key)->count();

		// $check = Wager::Where('id', $slug)->where('status','0')->count();

		if ($check == '0') {

			$check_user = On_Going_Game_List::Where('game_over', '==', '0')->where('game_key', $game_key)->count();

			$data = array('status' => '0');

			if ($vs_type == '1v1') {
				if ($check_user == '2') {
					return Redirect('wager/fortnite');
				}
				if ($check_user == '1') {

					$data = array('status' => '1');

				}
			}
			if ($vs_type == '2v2') {
				if ($check_user == '4') {
					return Redirect('wager/fortnite');
				}
				if ($check_user == '3') {
					$data = array('status' => '1');

				}
			}

			//insert in on going game list
			$ongoing = new On_Going_Game_List();

			$ongoing->gamername = Auth::user()->email;
			$ongoing->gamemode = $wager_data['gamemode'];
			$ongoing->server = $wager_data['server'];
			$ongoing->amount = $wager_data['amount'];
			$ongoing->vs_type = $wager_data['vs_type'];
			$ongoing->console = $wager_data['console'];
			$ongoing->game_key = $wager_data['gamer_slug'];
			$ongoing->prize = $wager_data['prize'];
			if (@$team == "team2") {
				$team = "Team 2";
			} else {
				$team = "Team 1";
			}
			$ongoing->team = @$team;
			$ongoing->sqard = $team;

			if ($vs_type == "1v1") {

				if ($check_user == 0) {
					$ongoing->sqard = 'Team 1';
				} else {
					$ongoing->sqard = 'Team 2';
				}

				$this->cansel_request($request);
			} else {

				$check_count = On_Going_Game_List::Where('game_key', $game_key)->where('sqard', 'Team 1')->count();

				// if($check_count<"2"){
				//   $ongoing->sqard='Team 1';
				// }else{
				//   $ongoing->sqard='Team 2';
				// }

				// if($check_user=="0"){
				//   $ongoing->sqard='Squard 1';
				// }
				// elseif($check_user=="1"){
				//   $ongoing->sqard='Squard 2';
				// }
				// elseif($check_user=="2"){
				//   $ongoing->sqard='Squard 1';
				// }
				// else{
				//   $ongoing->sqard='Squard 2';
				// }

				$this->cansel_request($request);
			}

			$ongoing->epic_profile_id = Auth::user()->epic_profile_id;
			$ongoing->epicid = Auth::user()->epicid;
			$ongoing->valorantid = Auth::user()->valorantid;

			// // check if for fortnite game
			// if($ongoing->gamemode == "FortniteBoxfight" || $ongoing->gamemode == "FortniteBuildfight"){
			//   $ongoing->epic_profile_id=Auth::user()->epic_profile_id;
			// }
			// else{
			//   $ongoing->epic_profile_id=Auth::user()->valorantid;
			// }

			// $ongoing->game_key=uniqid();
			$ongoing->confirmation = '0';
			$ongoing->confirmation_game_enter = '0';
			$ongoing->score = '-1';
			$ongoing->score_confirm = '0';
			$ongoing->dispute = '0';
			$ongoing->dispute_time = "";
			$ongoing->dispute_image = "";
			$ongoing->game_over = '0';

			if ($ongoing->save()) {

				// update in wager table

				$updated = Wager::where('id', $slug)->update($data);

			} else {
				return view('front.wager');
			}
		}
		return view('front.confirm', compact('wager_data'));
	}

	//  confirm user in confirm page
	public function confirm_user(Request $request) {

		$game_key = $request->game_key;

		$user_confirmation = On_Going_Game_List::Where('gamername', Auth::user()->email)->Where('game_key', $game_key)->where('confirmation', '0')->count();

		if ($user_confirmation == "1") {

			// update in wager table
			$data = array('confirmation' => '1');
			$updated = On_Going_Game_List::where('gamername', Auth::user()->email)->Where('game_key', $game_key)->update($data);
			if ($updated) {
				return "true";
			} else {
				return "false";
			}

		}

		// $wager_data = Wager::Where('id', $slug)->where('status','0')->first();
	}

	// check in wager page that other user joined place match or not
	public function check_player_joined(Request $request) {

		$gameid = $request->gameid;

		$check_join = On_Going_Game_List::Where('game_key', $gameid)->count();
		if ($check_join == 0) {

			return 'false';

		} else {
			return 'true';
		}

	}

	// check all user confirmd or not in confirm page
	public function check_confirmation(Request $request) {

		$game_key = $request->game_key;
		$check_cansel = "";
		$get_squard = On_Going_Game_List::select('sqard')->Where('game_key', $game_key)->where('gamername', Auth::user()->email)->first();

		if ($get_squard['sqard'] == "Team 1") {
			$check_cansel = On_Going_Game_List::Where('game_key', $game_key)->where('sqard', 'Team 2')->count();
		}
		if ($get_squard['sqard'] == "Team 2") {
			$check_cansel = On_Going_Game_List::Where('game_key', $game_key)->where('sqard', 'Team 1')->count();
		}

		if (@$check_cansel == 0) {
			// $Delete_On_Going_Game_List = On_Going_Game_List::where(['game_key'=>$game_key])->delete();
			// return Redirect('wager');
		}

		$game_key = On_Going_Game_List::select('game_key')->Where('gamername', Auth::user()->email)->where('confirmation', '1')->where('game_key', $game_key)->first();
		$vs_type = On_Going_Game_List::select('vs_type')->Where('gamername', Auth::user()->email)->where('game_key', $game_key['game_key'])->first();
		if ($game_key) {

			$game_key = $game_key['game_key'];
			$vs_type = $vs_type["vs_type"];

			$all_user_confirmation = On_Going_Game_List::select('confirmation')->where('game_key', $game_key)->get();

			$user_count = On_Going_Game_List::where('game_key', $game_key)->count();

			$check_confirmation = "false";

			// check user count for 1v1
			if ($vs_type == '1v1') {
				if ($user_count == '2') {
					$check_confirmation = "true";
				}
			}
			// check user count for 2v2
			if ($vs_type == '2v2') {
				if ($user_count == '4') {
					$check_confirmation = "true";
				}
			}

			foreach ($all_user_confirmation as $key => $value) {
				if ($value->confirmation == '0') {
					$check_confirmation = "false";
				}
			}

			if ($check_confirmation == "true") {
				$data = array('created_at' => date('Y-m-d H:i:s'));
				$updated = On_Going_Game_List::Where('game_key', $game_key)->update($data);
			}
			echo $check_confirmation;
		}

	}

	public function send_message(Request $request) {
		$getIdFromUserTbl = User::Where('email', $request->receiver_id)->first();
		$userId = $getIdFromUserTbl->id;

		$data = array('sender_id' => Auth::user()->id, 'receiver_id' => $userId, 'message' => $request->messageTxt);
		$query = \DB::table('chat')->insert($data);
		$response = '';
		if ($query == true) {
			$response = ['status' => 1, 'message' => ''];
		} else {
			$response = ['status' => 0, 'message' => 'sorry we re having some technical problems. please try again !'];
		}
		echo json_encode($response);
	}

	public function get_chat_history_by_vendor(Request $request) {

		$getIdFromUserTbl = User::Where('email', $request->receiver_id)->first();
		$receiver_id = $getIdFromUserTbl->id;
		//echo	$receiver_id = $request->receiver_id;

		$Logged_sender_id = Auth::user()->id;
		//$condition= "sender_id = $Logged_sender_id AND receiver_id = $receiver_id OR sender_id = $receiver_id AND receiver_id = $Logged_sender_id";

		$history = \DB::table('chat')->where('sender_id', Auth::user()->id)
			->where('receiver_id', $receiver_id)
			->orWhere('sender_id', $receiver_id)
			->where('receiver_id', Auth::user()->id)
			->orderBy('id', 'asc')->get();
		//$history = $this->ChatModel->GetReciverChatHistory($receiver_id);
		$counter = 0;
		foreach ($history as $chat):
			$message_id = $chat->id;
			$sender_id = $chat->sender_id;
			$userName = users_name($chat->sender_id); //$this->UserModel->GetName($chat->sender_id);
			//$userPic = $this->UserModel->PictureUrlById($chat['sender_id']);

			$message = $chat->message;
			$messagedatetime = date('d M H:i A', strtotime($chat->message_date_time));

			?>

																														           <?php if ($Logged_sender_id != $sender_id) {?>
																														            <div class="media media-chat media-chat-reverse">
																														                <img class="avatar" src="<?php echo url('public/assets/character/ch1_final.png'); ?>" alt="...">
																														                <div class="media-body">
																														                    <p id="search_terms"> <?php echo $message; ?></p>
																														                    <p class="meta"><time datetime="2018"><?php echo $messagedatetime; ?></time></p>
																														                </div>
																														            </div>



																														          <?php } else {?>

																														            <div class="media media-chat"> <img class="avatar" src="<?php echo url('public/assets/character/ch2_final.png'); ?>" alt="...">
																														              <div class="media-body">
																														                    <p id="search_terms"> <?php echo $message; ?></p>
																														                    <p class="meta"><time datetime="2018"><?php echo $messagedatetime; ?></time></p>
																														              </div>
																														            </div>


																														           <?php }?>

																														      <?php
endforeach;

	}

	// get opponent Info
	public function get_opponent_info(Request $request) {

		$gameid = $request->game_key;

		$get_own_squard = On_Going_Game_List::select('sqard')->Where('game_key', $gameid)->Where('gamername', Auth::user()->email)->first();

		$gamername = On_Going_Game_List::select('gamername')->Where('game_key', $gameid)->Where('gamername', '!=', Auth::user()->email)->where('sqard', '!=', $get_own_squard->sqard)->first();
		if ($gamername) {
			$gamer_info = User::select('name', 'epicid', 'pimage', 'valorantid', 'id')->where('email', $gamername->gamername)->first();
			return $gamer_info;
		} else {
			return "false";
		}

	}

	public function get_2v2_opponent_info(Request $request) {

		$gameid = $request->game_key;

		$get_own_squard = On_Going_Game_List::select('sqard')->Where('game_key', $gameid)->Where('gamername', Auth::user()->email)->first();
		$gamer_info = array();
		$gamername = On_Going_Game_List::select('gamername')->Where('game_key', $gameid)->where('sqard', '!=', $get_own_squard->sqard)->get();

		if ($gamername) {
			foreach ($gamername as $value) {
				$gamer_info1 = User::select('name', 'epicid', 'pimage', 'valorantid', 'id')->where('email', $value['gamername'])->first();
				array_push($gamer_info, $gamer_info1);
			}
			return $gamer_info;
		} else {
			return "false";
		}
	}

	public function get_member_info(Request $request) {

		$gameid = $request->game_key;

		$get_own_squard = On_Going_Game_List::select('sqard')->Where('game_key', $gameid)->Where('gamername', Auth::user()->email)->first();

		$gamername = On_Going_Game_List::select('gamername')->Where('game_key', $gameid)->Where('gamername', '!=', Auth::user()->email)->where('sqard', $get_own_squard->sqard)->first();
		if ($gamername) {
			$gamer_info = User::select('name', 'epicid', 'pimage', 'valorantid', 'id')->where('email', $gamername->gamername)->first();
			return $gamer_info;
		} else {
			return "false";
		}

	}

	public function chat() {
		return view('front.chat');
	}

	public function gamecancel(Request $request) {
		//$request->session()->flash('addSuccess','Category Added successfully');
		Session::put('gameCancel', 'Game has been cancelled..');
		$GameUserWagerid = $request->GameUserid;
		//    $gettingEmail= User::select('email')->where('id', $GameUserid)->first();
		//  $userEmail = $gettingEmail->email;

		$user_email = Auth::user()->email;

		$gettingGamerslug = Wager::select('gamer_slug')->Where('id', $GameUserWagerid)->first();
		$gamerKey = @$gettingGamerslug->gamer_slug;

		$Delete_On_Going_Game_List = On_Going_Game_List::where(['game_key' => $gamerKey])->where('gamername', $user_email)->delete();

		$dataDelete = Wager::where(['gamer_slug' => $gamerKey])->where('gamername', $user_email)->delete();
		$Delete_from_send_request = send_requests::where(['gameid' => $GameUserWagerid])->delete();

		

		if ($Delete_On_Going_Game_List) {

			$data = array('status' => '0');
			$updated = Wager::where('gamer_slug', $gamerKey)->update($data);

			echo 'true';
		}

	}

	public function check_cancelgame(Request $request) {

		$wagersId = $request->wagersId;
		$gamerKey = $request->gamer_key;
		$wager_count = Wager::Where('id', $wagersId)->count();
		if ($wager_count == '0') {
			$useremail = Auth::user()->email;

			$Delete_On_Going_Game_List = On_Going_Game_List::where(['game_key' => $gamerKey])->delete();
			return 'true';

		} else {
			return 'false';
		}

	}

	//check user info for to connect to the game
	public function check_info(Request $request) {

		  $gamer_slug = $request->gamer_slug; 
	    $wagerId = $request->uid; 
   
		$gamername = Auth::user()->email;

		$gamer_info = User::select('user_balance', 'epicid', 'epic_profile_id', 'valorantid','email_verified_at')->where('email', $gamername)->first();

		$game_vs_type = On_Going_Game_List::select('vs_type', 'epicid', 'epic_profile_id', 'valorantid', 'amount', 'gamemode')->where('game_key', $gamer_slug)->first();

		if ($gamer_info->user_balance < $game_vs_type->amount) {
			return 'User Balance is not sufficient';
			die();
		}

		if ($gamer_info->email_verified_at == "" || $gamer_info->email_verified_at == NULL) {
			return 'Email Id Still Not Verified';
			die();
		}
		
		if ($game_vs_type->gamemode == "Valorant") {
			if ($gamer_info->valorantid == "" || $gamer_info->valorantid == null) {
				return 'User Valorant Id is not Updated';
				die();
			}
		} else {
			if ($gamer_info->epicid == "" || $gamer_info->epicid == null || $gamer_info->epic_profile_id == "" || $gamer_info->epic_profile_id == null) {
				return 'User Epic Id is not Updated';
				die();
			}
		}

		return "1";

	}

	// for send a request to friend to join game
	public function send_request(Request $request) {
		$request->createTeam;
		if ($request->createTeam == 'createTeam') {
			
			$gamername = Auth::user()->email;
			$friendname = $request->epicid;

			$count = \DB::table('friend')->where(['gamer_name' => $gamername])->where('friend_name', $friendname)->count();
			if ($count == "0") {
				$data = array('gamer_name' => $gamername, 'friend_name' => $friendname);
				$send_request = DB::table('friend')->insert($data);

				
			
			} else {
				return 'This Friend is already in List...';
			}

			//  $count = \DB::table('friend')->where(['gamer_name' => $friendname])->where('friend_name', $gamername)->count();
			//  if ($count == "0") {
			// 	 $data = array('gamer_name' => $friendname, 'friend_name' => $gamername);
			// 	 $send_request = DB::table('friend')->insert($data);
			//  }else {
			// 	return 'Friend already Exists...';
			// }

			// $data= array('gamer_name'=>Auth::user()->email,'friend_name'=>$request->epicid);
			// $send_request =DB::table('friend')->insert($data);

			if ($send_request) {
			 	$trnTime = date('Y-m-d H:i:s');
				$noti_array = array('noti_type'=>'Friend Request','noti_info'=>'You have got friend request from'.$gamername,'noti_link'=>urldecode(route('userprofile').'#teams'),'noti_gamer'=>$friendname,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
			
				return 'Request has been Send..';
			
			} else {
				return false;
			}

		} else {
			$send_request = new send_requests();

			$send_request->gamer_slug = $request->gamer_sluged;
			$send_request->game_key = $request->gamer_key;
			$send_request->receiver_id = $request->epicid;
			$send_request->sender_id = Auth::user()->email;
			$send_request->gameteam = $request->gameteam;
			$send_request->gameid = $request->gameid;

			$gamemode = $request->gamemode;
			$gameamount = $request->gameamount;
			$gamer_info = User::select('user_balance', 'epicid', 'epic_profile_id', 'valorantid','email_verified_at')->where('email', $request->epicid)->first();

			if ($gamer_info->user_balance < $gameamount) {
				return 'User Balance is not sufficient';
				die();
			}

			if ($gamer_info->email_verified_at == "" || $gamer_info->email_verified_at == NULL) {
				return 'User Profile Is Not Updated';
				die();
			}

			if ($gamemode == "Valorant") {
				if ($gamer_info->valorantid == "" || $gamer_info->valorantid == null) {
					return 'User Profile Is Not Updated';
					die();
				}
			} else {
				if ($gamer_info->epicid == "" || $gamer_info->epicid == null || $gamer_info->epic_profile_id == "" || $gamer_info->epic_profile_id == null) {
					return 'User Profile Is Not Updated';
					die();
				}
			}

			if ($send_request->save()) {
				$trnTime = date('Y-m-d H:i:s');
				$noti_array = array('noti_type'=>'Game Request','noti_info'=>'You have got Game request from '.Auth::user()->email,'noti_link'=>urldecode(route('userprofile').'#teams'),'noti_gamer'=>$request->epicid,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
				return 'Request has been Send';
				
			
			} else {
				return false;
			}
		}
	}

	public function get_request(Request $request) {

		$receiver_id = $request->receiver_id;
		$count = send_requests::Where('receiver_id', $receiver_id)->count();

		if ($count >= 1) {
		$get = send_requests::Where('receiver_id', $receiver_id)->orderBy("id", "desc")->get();
			echo $get;
		} else {
			echo false;
		}

	}

	// for cansel a request to friend to join game
	public function cansel_request(Request $request) {

		$receiver_id = $request->receiver_id;
        $gamekey = $request->gamekey;
        $senderid = $request->senderid;
		$dataDelete = send_requests::where(['receiver_id' => Auth::user()->email,'game_key'=>$gamekey])->delete();

		 if($dataDelete){
		 	$trnTime = date('Y-m-d H:i:s');
				$noti_array = array('noti_type'=>'Cancel','noti_info'=>'Your Request has been cancelled by '.$receiver_id,'noti_link'=>'#','noti_gamer'=>$senderid,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
		   return "true";
		 }
		 else{
		   return "false";
		 }
	}
	public function friend_cansel_request(Request $request) {

		$receiver_id = $request->receiver_id;
		$frienddelete = DB::table('friend')->where('friend_name', $receiver_id)->delete();

	}

	public function addfriend(Request $request) {

		$gamername = $request->gamer_name;
		$friendname = $request->friend_name;
				$game_slug = $request->game_slug;

	   
			 echo $request->wid;


		$count = \DB::table('friend')->where(['gamer_name' => $gamername])->where('friend_name', $friendname)->count();
		if ($count == "0") {
			$trnTime = date('Y-m-d H:i:s');
			$noti_array = array('noti_type'=>'Friend Request Accepted','noti_info'=>'Friend Request Accepted by'.' '.$friendname,'noti_link'=>urldecode(route('userprofile').'#teams'),'noti_gamer'=>$gamername,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
		
			
			$data = array('gamer_name' => $gamername, 'friend_name' => $friendname);
			DB::table('friend')->insert($data);

			
			
		}

		$count = \DB::table('friend')->where(['gamer_name' => $friendname])->where('friend_name', $gamername)->count();
		if ($count == "0") {
			$data = array('gamer_name' => $friendname, 'friend_name' => $gamername);
			\DB::table('friend')->insert($data);

		
		}

	}

	public function addfriendconfirm(Request $request) {
		$gamername = $request->gamer_name;
		$friendname = $request->friend_name;
		$data = array('acceptStatus' => '1');
		$update1 = \DB::table('friend')->where(['gamer_name' => $friendname])->where('friend_name', $gamername)->update($data);

		$data = array('gamer_name' => $gamername, 'friend_name' => $friendname, 'acceptStatus' => '1');
		\DB::table('friend')->insert($data);

	}

}
