<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use App\Model\Admin\AssignContentCreators;
use App\Model\Admin\Codecreators;
use App\Model\Deposit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayPalController extends Controller {
	
	public function cancel() {
		return view('front.cancel');

	}

	public function success(Request $request) {
		//  echo '<pre>';
		//  print_r(json_decode(json_encode($request->all())));
		//  die();
		//  @$check =  Deposit::where('txn_id', '=' , $request->txn_id)->count();
		if (isset($request->txn_id)) {
			$user = new Deposit();
			@$amt = $request->payment_gross;
			@$tnxId = $request->txn_id;
			@$payment_status = $request->payment_status;
			$user->gamername = trim($request->item_number);
			$user->txn_id = $request->txn_id;
			$user->payment_gross = $request->payment_gross;
			$user->currency_code = $request->mc_currency;
			$user->payment_status = $request->payment_status;
			$user->payment_date = $request->payment_date;

			$invitation_link = Deposit::where('txn_id', $user->txn_id)->count();
			if ($invitation_link >= "1") {
				return redirect('/');
			}

			$user->save(); //insert into deposit table
			@$Lastid = DB::getPdo()->lastInsertId();

			$gamername = trim($request->item_number);
			// insert into transaction
			$trnTime = date('Y-m-d H:i:s');
			$transactiondata = array('gamername' => $gamername, 'mode' => 'paypal added', 'amount' => $amt, 'balance' => '+', 'created_at' => $trnTime);

			//insert into notification table
			
				$noti_array = array('noti_type'=>'Deposit Amount','noti_info'=>'Amount Deposit from Paypal','noti_link'=>urldecode(route('userprofile').'#history'),'noti_gamer'=>$gamername,'created_at' => $trnTime);
		   	DB::table('notification')->insert($noti_array);

			// for invitation register add payment
			$invitation_link = User::select('invitation_link')->where('email', $gamername)->where('invitation_status', '0')->where('invitation_link', '!=', null)->first();

			if (!isset($invitation_link)) {
				$check = "0";
			} else {
				$user_invitation_link = $invitation_link['invitation_link'];
				$check = AssignContentCreators::where('uniqkey', $user_invitation_link)->count();
			}

			if ($check >= "1") {
				$assign_user_data = AssignContentCreators::select('gamername', 'code_create_amount', 'code_create_id')->where('uniqkey', $user_invitation_link)->first();

				$code_status = Codecreators::select('codecreator_type')->where('id', $assign_user_data['code_create_id'])->first();
				$codecreator_type = $code_status['codecreator_type'];

				$assign_user = $assign_user_data['gamername'];
				$assign_amount = $assign_user_data['code_create_amount'];

				$assign_user_balance = User::select('user_balance')->where('email', $assign_user)->first();

				$assign_amount = $assign_amount;
				$assign_data = array('user_balance' => $assign_amount);
				$assign_update = User::where('email', $assign_user)->update($assign_data);

				$assign_transaction_data = array('gamername' => $assign_user, 'mode' => 'Inviation Refferal Pay', 'amount' => $assign_amount, 'balance' => '+', 'created_at' => $trnTime);
				DB::table('transaction')->insert($assign_transaction_data);

				if ($codecreator_type == "1") {
					$invitation_status = "0";
				} else {
					$invitation_status = "1";
				}

			} else {
				$invitation_status = "1";
			}

			DB::table('transaction')->insert($transactiondata);
			// end

			@$userDetails = \DB::table('users')->where(['email' => $gamername])->first();

			@$value = $userDetails->user_balance;

			$Editdata = array('invitation_status' => $invitation_status, 'user_balance' => $value + $amt);
			$UPDATE = User::where('email', $gamername)->update($Editdata);

			return view('front.success', compact(['Lastid', 'tnxId', 'amt', 'payment_status']));

		} else {
			return redirect()->route('index');

		}

	}

	public function getAmount(Request $request) {
		$amounta = $request->amounta;
		$cc = $request->currency_code;

	}

	public function paypal_history(Request $request) {
		$amount = $request->amount;
		$mode = $request->mode;
		$user_name = $request->user_name;
			$trnTime = date('Y-m-d H:i:s');
			$history_array = array('mode'=>$mode,'amount'=>$amount,'user_name'=>$user_name,'created_at' => $trnTime);
		   	DB::table('paypal_history')->insert($history_array);
	}                   
	

}
