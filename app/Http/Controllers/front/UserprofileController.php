<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Model\Admin\AssignContentCreators;
use App\Model\Completed_Games_List;
use App\On_Going_Game_List;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use Request;

class UserprofileController extends Controller {

	  public function verifyprofile($email=NULL){
        	$user_veryfy_date = date('Y-m-d H:i:s');
		$data = array('email_verified_at' => $user_veryfy_date);
		$updated = User::where('email', $email)->update($data);		
		$all_transaction = '';
		if($updated){
			
			return view('front.index');
		}
        }
	public function userprofile($email=NULL) {
		
		$gamername = Auth::user()->email;
		$all_transaction = Completed_Games_List::select('gamemode', 'vs_type', 'amount', 'prize', 'score', 'result')->where('gamername', $gamername)->get();
		return view('front.user_profile', compact(['all_transaction']));
	 
	}
	public function profileimage(Request $request) {
		$userid = Auth::user()->id;
		$userprofileImage = $request->proImageName;
		$data = array('pimage' => $userprofileImage);
		$updated = User::where('id', $userid)->update($data);
	}

	public function updateprofile(Request $request) {

		$user = new User();

		$gamer_email = Auth::user()->email;
		$epicid = Auth::user()->epicid;
		if ($epicid == $request->epicid) {
			$data = array('epicid' => $request->name, 'epicid' => $request->epicid, 'valorantid' => $request->valorantid, 'server' => $request->server1, 'paypalemail' => $request->paypalemail);
		} else {
			$data = array('epicid' => $request->epicid, 'valorantid' => $request->valorantid, 'epic_profile_id' => NULL, 'server' => $request->server1, 'paypalemail' => $request->paypalemail);
		}

		$updated = User::where('email', $gamer_email)->update($data);

		if ($updated) {
			return 'Profile Updated Successfully...';
		} else {
			return 'false';
		}
	}

	public function updateuserinfo(Request $request) {

		$user = new User();

		$gamer_email = Auth::user()->email;
		$epicid = Auth::user()->epicid;

		$data = array('epicid' => $request->epicid, 'epic_profile_id' => "");

		$updated = User::where('email', $gamer_email)->update($data);

		if ($updated) {
			return 'EpicId Updated Successfully...';
		} else {
			return 'false';
		}
	}

	public function updateuserinfovalorant(Request $request) {

		$user = new User();

		$gamer_email = Auth::user()->email;
		$valorantid = Auth::user()->valorantid;

		$data = array('valorantid' => $request->valorantid);

		$updated = User::where('email', $gamer_email)->update($data);

		if ($updated) {
			return 'ValorantId Updated Successfully...';
		} else {
			return 'false';
		}
	}

	public function get_profile_id() {

		$gamer_email = Auth::user()->email;

		$profile_data = User::select('epicid','user_balance', 'valorantid', 'epic_profile_id', 'server','email_verified_at')->where('email', $gamer_email)->first();

		echo $profile_data;

	}

	public function get_user_gameinfo() {

		$gamer_email = Auth::user()->email;

		$profile_data['win'] = Completed_Games_List::where('gamername', $gamer_email)->where('result', 'W')->count();

		$profile_data['loss'] = Completed_Games_List::where('gamername', $gamer_email)->where('result', 'L')->count();

		return $profile_data;
	}

	public function check_withdraw_info() {
		$gamer_email = Auth::user()->email;
		$dispute = Completed_Games_List::where('gamername', $gamer_email)->where('dispute', '1')->count();

		$ongoing = On_Going_Game_List::where('gamername', $gamer_email)->count();

		if ($dispute >= "1") {
			return 'false';
		} elseif ($ongoing >= "1") {
			return 'false';
		} else {
			return 'true';
		}

	}

	public function get_user_gamedata() {
		$data = array();
		$gamer_email = Auth::user()->email;

		$all_transaction = Completed_Games_List::select('gamemode', 'vs_type', 'amount', 'prize', 'score', 'result')->where('gamername', $gamer_email)->where('dispute', '0')->get();

		foreach ($all_transaction as $k => $v) {

			$data[] = array(
				'gamemode' => $v->gamemode,
				'vs' => $v->vs_type,
				'amount' => $v->amount,
				'prize' => $v->prize,
				'score' => $v->score,
				'result' => $v->result,
			);

		}
		// $request->input('draw')

		$final_results = array(
			"draw" => 'draw',
			"recordsTotal" => count($data),
			"recordsFiltered" => count($data),
			"data" => $data,
		);

		// echo json_encode(array('data' => $data, "draw" =>intval($_POST['draw']), "recordsTotal" => count($data), "recordsFiltered" => count($data)));

		echo json_encode($final_results);
	}

	// check user for content creators
	public function checkcontentcreators_assign() {

		$gamer_email = Auth::user()->email;

		$usercontent_count = AssignContentCreators::where("gamername", $gamer_email)->count();
		if ($usercontent_count == "0") {
			return "false";
		} else {
			$usercontent_data = AssignContentCreators::where("gamername", $gamer_email)->first();
			return $usercontent_data;
		}
	}

	public function read_transactiondata() {

		$gamer_email = Auth::user()->email;

		$transaction = DB::table('transaction')->where('gamername', $gamer_email)->orderBy('id', 'DESC')->get();
		$count = 0;
		$data = array();

		foreach ($transaction as $k => $v) {
			if ($v->balance == "+") {
				$amount = '<p style="color:green"> +' . $v->amount . '</p>';
			} else {
				$amount = '<p style="color:red"> -' . $v->amount . '</p>';
			}
			$data[] = array(
				'mode' => $v->mode,
				'amount' => $amount,
				'date' => $v->created_at,
			);
			$count++;
		}
		// $request->input('draw')

		$final_results = array(
			"draw" => '1',
			"recordsTotal" => $count,
			"recordsFiltered" => $count,
			"data" => $data,
		);

		// echo json_encode(array('data' => $data, "draw" =>intval($_POST['draw']), "recordsTotal" => count($data), "recordsFiltered" => count($data)));

		echo json_encode($final_results);

	}

	public function getfriend() {

		$gamer_email = Auth::user()->email;
		$friend_lists = DB::table('friend')
			->select('users.name', 'users.email', 'users.epicid', 'users.valorantid', 'users.pimage')
			->where('friend.gamer_name', $gamer_email)
			->join('users', 'users.email', '=', 'friend.friend_name')
			->get();

		return $friend_lists;
	}

	public function getprofilefriend() {

		$gamer_email = Auth::user()->email;
		$friend_lists_profile = DB::table('friend')
			->select('users.name', 'users.email', 'users.epicid', 'users.valorantid', 'users.pimage')
			->where('friend.friend_name', $gamer_email)

			->where('friend.acceptStatus', '1')
			->join('users', 'users.email', '=', 'friend.gamer_name')
			->get();

		return $friend_lists_profile;
	}

	public function getfriendrequest() {

		$gamer_email = Auth::user()->email;
		$friend_lists1 = DB::table('friend')
			->select('users.name', 'users.email', 'users.epicid', 'users.valorantid', 'users.pimage')
			->where('friend.friend_name', $gamer_email)
			->where('friend.acceptStatus', '0')
			->join('users', 'users.email', '=', 'friend.gamer_name')
			->get();

		return $friend_lists1;
	}

	public function withdraw(Request $request) 
	{
		 $paypalDetail = DB::table('paypals')->where('id','1')->first();

		define('PAYPAL_ID', $paypalDetail->paypalid);
		define('PAYPAL_SANDBOX', TRUE);
		define('PAYPAL_CLIENT_ID', $paypalDetail->paypalclientid);
		define('PAYPAL_SECRATE_KEY', $paypalDetail->paypalsecratekey);
		
		define('PAYPAL_CURRENCY', 'USD');

		define('PAYPAL_URL', (PAYPAL_SANDBOX == false) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");

		 $gamer_email = Auth::user()->email;
		  $account = $request->wpaypalemail;
		 $paybal= $request->paybal;
		  	 $withdrawCredit = $request->wamount; 
		  	 
	 	$available = Auth::user()->user_balance;
	 	if ($available >= $paybal) {
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_USERPWD, PAYPAL_CLIENT_ID . ":" . PAYPAL_SECRATE_KEY);

		$headers = array();
		$headers[] = "Accept: application/json";
		$headers[] = "Accept-Language: en_US";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$results = curl_exec($ch);
		$getresult = json_decode($results);
		
	

		// PayPal Payout API for Send Payment from PayPal to PayPal account
		curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payouts");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$array = array('sender_batch_header' => array(
			"sender_batch_id" => time(),
			"email_subject" => "You have a payout!",
			"email_message" => "You have received a payout.",
		),
			'items' => array(array(
				"recipient_type" => "EMAIL",
				"amount" => array(
					"value" => $withdrawCredit,
					"currency" => "USD",
				),
				"note" => "Thanks for the payout!",
				"sender_item_id" => time(),
				"receiver" => $account,
			)),
		);

		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array));
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = "Content-Type: application/json";
		$headers[] = "Authorization: Bearer $getresult->access_token";
		curl_setopt($ch, CURLOPT_HTTPHEADER,  array("Content-Type: application/json", "Authorization: Bearer $getresult->access_token"));

		$payoutResult = curl_exec($ch);
		//print_r($result);
		$getPayoutResult = json_decode($payoutResult,true);
		
		$status = print_r($getPayoutResult['batch_header']['batch_status']);
		
		
			if (curl_errno($ch)) {
				echo 'Error:' . curl_error($ch);
			}else {
			 if($status == 'PENDING' || $status == 'SUCCESS'){
			//$result = User::select('user_balance')->where('email', $gamer_email)->first();
			$result_price = $available - $paybal;
			$data = array('user_balance' => $result_price);
			  $updated = User::where('email', $gamer_email)->update($data);
			  
			  //insert notification tbl
			  $trnTime = date('Y-m-d H:i:s');
$noti_array = array('noti_type'=>'withdraw Amount','noti_info'=>'withdraw Amount From Paypal Account','noti_link'=>urldecode(route('userprofile').'#history'),'noti_gamer'=>$gamer_email,'created_at' => $trnTime);
DB::table('notification')->insert($noti_array);

 	//transaction
	$transactiondata = array('gamername' => $gamer_email, 'mode' => 'paypal withdraw', 'amount' => $paybal, 'balance' => '-', 'created_at' => $trnTime);
             	DB::table('transaction')->insert($transactiondata);
	      		if($updated)
	      		{
	      			return 'true';
	      		}
			 
			  }
			}
			}
			
		  else {
				echo "Insufficient Balance";
			}
	}
}	
	// public function withdraw(Request $request) {

	// 	define('PAYPAL_ID', 'sb-bqtpr1353259@business.example.com');
	// 	define('PAYPAL_SANDBOX', TRUE);
	// 	define('Client_ID', 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ');
	// 	define('PAYPAL_RETURN_URL', 'payout/success.php');
	// 	define('PAYPAL_CANCEL_URL', 'payout/success.php');
	// 	define('PAYPAL_CURRENCY', 'USD');

	// 	define('PAYPAL_URL', (PAYPAL_SANDBOX == false) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");

	// 	$gamer_email = Auth::user()->email;
	// 	$account = $request->wpaypalemail;
	// 	$withdrawCredit = $request->wamount;

	// 	$result = User::select('user_balance')->where('email', $gamer_email)->first();
	// 	$available = $result->user_balance;
	// 	if ($available > $withdrawCredit) {
	// 		$account = $request->wpaypalemail;
	// 		$client_id = 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ';
	// 		$secret = 'EPVMIsxnyxNkHOxRDLjU4xx4aA0ZhrSBwzNmn4OOOLKuN4Z-O6RaYHx-njrhWLtPB93sfWcNDpZkhZWF';

	// 		$sender_batch_id = rand(50000, 900000000000);
	// 		$sender_item_id = rand(50000, 900000000000);

	// 		// $payout=json_encode(array(
	// 		//              "sender_batch_header"=> array(
	// 		//              "sender_batch_id"=> $sender_batch_id,
	// 		// 	         "email_subject"=> "You have a payout!",
	// 		//              "email_message"=> "You have received a payout! Thanks for using our service!"
	// 		// 		),

	// 		//              "items"=> array(
	// 		//               array(
	// 		//                   "recipient_type"=>  "EMAIL",
	// 		//                   "amount"=>  array(
	// 		//                   "value"=>  $withdrawCredit,
	// 		//                   "currency"=>  "USD"
	// 		//                   ),
	// 		//                   "note"=>"Thank you for your services",
	// 		// 			      "sender_item_id"=>  $sender_item_id,
	// 		//                  "receiver"=> $account
	// 		//               ),
	// 		// 			),
	// 		// 		),
	// 		//   	);

	// 		// function get_token($client_id, $secret) {

	// 		// 	$ch = curl_init();
	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// 		// 	curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token"); //DUMMY
	// 		// 	// curl_setopt($ch, CURLOPT_URL, "https://api.paypal.com/v1/oauth2/token");  //LIVE
	// 		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
	// 		// 	curl_setopt($ch, CURLOPT_POST, true);
	// 		// 	curl_setopt($ch, CURLOPT_USERPWD, $client_id . ":" . $secret);

	// 		// 	$headers = array();
	// 		// 	$headers[] = "Accept: application/json";
	// 		// 	$headers[] = "Accept-Language: en_US";

	// 		// 	// $headers[] = "Content-Type: application/x-www-form-urlencoded";
	// 		// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	// 		// 	$result = curl_exec($ch);

	// 		// 	$token = (json_decode($result)->access_token);
	// 		// 	// echo $token;
	// 		// 	if (curl_errno($ch)) {
	// 		// 		echo 'Error:' . curl_error($ch);
	// 		// 	}
	// 		// 	curl_close($ch);

	// 		// 	return $token;

	// 		// }

	// 		// function payout($client_id, $payout, $secret, $token) {

	// 		// 	$ch = curl_init("https://api.sandbox.paypal.com/v1/payments/payouts");
	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// 		// 	// curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payouts");  //DUMMY
	// 		// 	//curl_setopt($ch, CURLOPT_URL, "https://api.paypal.com/v1/oauth2/token");  //LIVE
	// 		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $payout);
	// 		// 	curl_setopt($ch, CURLOPT_POST, true);
	// 		// 	curl_setopt($ch, CURLOPT_USERPWD, $client_id . ":" . $secret);

	// 		// 	$headers = array();
	// 		// 	// $headers[] = "Accept: application/json";
	// 		// 	$headers[] = "Content-Type: application/json";
	// 		// 	$headers[] = "Authorization: Bearer$token";

	// 		// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer $token"));
	// 		// 	$result = curl_exec($ch);
	// 		// 	$payout_final = (json_decode($result));

	// 		// 	if (curl_errno($ch)) {
	// 		// 		echo 'Error:' . curl_error($ch);
	// 		// 	}

	// 		// 	curl_close($ch);

	// 		// 	return $payout_final;
	// 		// }

	// 		// function get_payment_info($payout_batch_details_url, $token) {
	// 		// 	$headers = array();
	// 		// 	// $headers[] = "Accept: application/json";
	// 		// 	$headers[] = "Content-Type: application/json";

	// 		// 	$headers[] = "Authorization: Bearer$token";

	// 		// 	$ch = curl_init($payout_batch_details_url);

	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	// 		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	// 		// 	curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/payments/payouts"); //DUMMY
	// 		// 	//  curl_setopt($ch, CURLOPT_URL, "https://api.paypal.com/v1/oauth2/token");  //LIVE
	// 		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// 		// 	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer$token"));

	// 		// 	$result = (json_decode(curl_exec($ch)));
	// 		// 	//  echo '<pre>';
	// 		// 	//  print_r($result);
	// 		// 	return $result;
	// 		// }

	// 		$token = get_token($client_id, $secret);

	// 		//  echo "<br></br>";
	// 		$payout_result = payout($client_id, $payout, $secret, $token);
	// 		//  echo "<br></br>";

	// 		$links = json_encode($payout_result->links);

	// 		$JSON = str_replace("\/", "/", $links);
	// 		$someJSON = $JSON;

	// 		// Convert JSON string to Array
	// 		$someArray = json_decode($someJSON, true);

	// 		$payout_batch_details_url = $someArray[0]["href"];

	// 		$data = json_encode(get_payment_info($payout_batch_details_url, $token), JSON_PRETTY_PRINT);
	// 		echo $data;
	// 	} else {
	// 		echo "Insufficient Balance";
	// 	}

	// }


