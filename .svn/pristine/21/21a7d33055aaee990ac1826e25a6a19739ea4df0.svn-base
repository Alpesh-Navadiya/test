<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Transfer_Amount_User extends Controller {

	// transfer amount admin to user view
	public function transferamount($email = null) {
		return view('admin.amount_admin_to_user', compact('email'));
	}

	// Add or Withdraw amount admin to user
	public function add_transferamount(Request $request) {

		$user_email = $request->uname;
		$user_transfer_amount = $request->amount;
		$transfer_type = $request->ttype;

		$admin_email = Auth::user()->email;

		$user_old_balance = User::select('user_balance')->where('email', $user_email)->first();

		$trnTime = date('Y-m-d H:i:s');

		if ($transfer_type == "+") {
			$admin_email = Auth::user()->email;
			$user_balance = $user_old_balance['user_balance'] + $user_transfer_amount;
			$user_transfer_data = array('gamername' => $user_email, 'mode' => 'Admin Transfer', 'amount' => $user_transfer_amount, 'balance' => '+', 'created_at' => $trnTime);
			$admin_transfer_data = array('gamername' => $admin_email, 'mode' => 'Admin Transfer', 'amount' => $user_transfer_amount, 'balance' => '-', 'fromemail' => $user_email, 'created_at' => $trnTime);

			$noti_array = array('noti_type'=>'Balance Added','noti_info'=>'Admin Added Balance','noti_link'=>urldecode(route('userprofile').'#history'),'noti_gamer'=>$user_email,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);

		} else {
			$user_balance = $user_old_balance['user_balance'] - $user_transfer_amount;
			$user_transfer_data = array('gamername' => $user_email, 'mode' => 'Admin Transfer', 'amount' => $user_transfer_amount, 'balance' => '-', 'created_at' => $trnTime);
			$admin_transfer_data = array('gamername' => $admin_email, 'mode' => 'Admin Transfer', 'amount' => $user_transfer_amount, 'balance' => '+', 'fromemail' => $user_email, 'created_at' => $trnTime);
			
			$noti_array = array('noti_type'=>'Balance Deduction ','noti_info'=>'Admin Deducted Balance ','noti_link'=>urldecode(route('userprofile').'#history'),'noti_gamer'=>$user_email,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
		}

		// return Auth::user()->email;
		$user_data = array('user_balance' => $user_balance);
		$update = User::where('email', $user_email)->update($user_data);
		if ($update) {
			DB::table('transaction')->insert($admin_transfer_data);
			DB::table('transaction')->insert($user_transfer_data);
			
			return "Transfer Amount Successfully";
		} else {
			return "false";
		}

	}

	public function read_transferamount() {
		$data = array();
		$count = 1;

		$admin_email = Auth::user()->email;
		$transactions = DB::table('transaction')->select('*')->where('gamername', $admin_email)->orderBy('id','DESC')->get();
		if (!is_null($transactions)) {
			foreach ($transactions as $key => $value) {
				if ($value->balance == "+") {
					// $amount = '<p style="color:green"> +' . $value->amount . '</p>';
						$type="Admin Debited";
				} else {
					// $amount = '<p style="color:red"> -' . $value->amount . '</p>';
						$type="Admin Credited";
				}
				$data[] = array(
					'touser' => $value->fromemail,
					'type' => $type,
					'amount' => $value->amount,
					'date' => $value->created_at,
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
}
