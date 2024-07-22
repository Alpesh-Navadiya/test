<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Amount;
use App\Model\Admin\Gamemode;
use App\Model\Admin\Platform;
use App\Model\Admin\Server;
use App\Model\Admin\Team;
use App\Model\Paypal;
use Illuminate\Http\Request;

class WagerDetailsController extends Controller {

	// for gamemode Start
	public function gamemodeview() {

		return view('admin.gamemode');
	}

	// add game mode
	public function add_gamemode(Request $request) {

		$gamemode = new Gamemode();
		$gamemode->gamemode_type = $request->gamemodetype;
		$gamemode->gamemode_name = $request->gamemodename;

		// for update
		if (@$request->id) {
			$gamemode->id = $request->id;
			$data = array('gamemode_type' => $request->gamemodetype, 'gamemode_name' => $request->gamemodename);
			$updated = Gamemode::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$gamemode = $gamemode->save();
			if ($gamemode) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_gamemode(Request $request) {
		$data = array();
		$count = 1;

		$gamemodes = Gamemode::where("id", $request->uid)->first();

		return $gamemodes;
	}

	public function delete_gamemode(Request $request) {

		$data = array();
		$count = 1;

		$gamemodes = Gamemode::where("id", $request->uid)->delete();

		if ($gamemodes) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_gamemode(Request $request) {

		$data = array();
		$count = 1;

		$gamemodes = Gamemode::select('*')->get();
		if (!is_null($gamemodes)) {
			foreach ($gamemodes as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'gtype' => $value->gamemode_type,
					'name' => $value->gamemode_name,
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
	// for gamemode end

	// for amount Start
	public function gameamountview() {

		return view('admin.amount');
	}

	public function add_amount(Request $request) {

		$gameamount = new Amount();
		$gameamount->amount = $request->amount;
		$gameamount->our_fees = $request->our_fees;
		$setted_amt = $request->amount;

		$setted_prize = $setted_amt * 1.8;
		$gameamount->prize = $setted_prize;

		// for update
		if (@$request->id) {
			$gameamount->id = $request->id;
			$data = array('amount' => $request->amount, 'prize' => $setted_prize, 'our_fees' => $request->our_fees);
			$updated = Amount::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$gameamount = $gameamount->save();

			if ($gameamount) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_amount(Request $request) {
		$data = array();
		$count = 1;

		$gamemodes = Amount::where("id", $request->uid)->first();

		return $gamemodes;
	}

	public function delete_amount(Request $request) {

		$data = array();
		$count = 1;
		$gamemodes = Amount::where("id", $request->uid)->delete();

		if ($gamemodes) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_amount(Request $request) {

		$data = array();
		$count = 1;

		$gamemodes = Amount::select('*')->get();
		if (!is_null($gamemodes)) {
			foreach ($gamemodes as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'gtype' => $value->amount,
					'fees' => $value->our_fees,
					'name' => $value->prize,
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
	// for amount End

	// for Team Start
	public function teamview() {

		return view('admin.team');
	}

	public function add_team(Request $request) {

		$team = new Team();
		$team->team_name = $request->name;
		$team->team_player = $request->size;

		// for update
		if (@$request->id) {
			$team->id = $request->id;
			$data = array('team_name' => $request->name, 'team_player' => $request->size);
			$updated = Amount::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$team = $team->save();

			if ($team) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_team(Request $request) {
		$data = array();
		$count = 1;

		$team = Team::where("id", $request->uid)->first();

		return $team;
	}

	public function delete_team(Request $request) {

		$data = array();
		$count = 1;
		$team = Team::where("id", $request->uid)->delete();

		if ($team) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_team(Request $request) {

		$data = array();
		$count = 1;

		$gamemodes = Team::select('*')->get();
		if (!is_null($gamemodes)) {
			foreach ($gamemodes as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'gtype' => $value->team_name,
					'name' => $value->team_player,
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
	// for Team end

	// for platform Start
	public function platformview() {

		return view('admin.platform');
	}

	public function add_platform(Request $request) {

		$platform = new Platform();
		$platform->platform = $request->name;

		// for update
		if (@$request->id) {
			$platform->id = $request->id;
			$data = array('platform' => $request->name);
			$updated = Platform::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$platform = $platform->save();

			if ($platform) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_platform(Request $request) {
		$data = array();
		$count = 1;

		$platform = Platform::where("id", $request->uid)->first();

		return $platform;
	}

	public function delete_platform(Request $request) {

		$data = array();
		$count = 1;
		$team = Platform::where("id", $request->uid)->delete();

		if ($team) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_platform(Request $request) {

		$data = array();
		$count = 0;

		$platform = Platform::select('*')->get();
		if (!is_null($platform)) {
			foreach ($platform as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'name' => $value->platform,
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
	// for platform end

	// for server Start
	public function serverview() {

		return view('admin.server');
	}

	public function add_server(Request $request) {

		$server = new Server();
		$server->server_name = $request->name;

		// for update
		if (@$request->id) {
			$server->id = $request->id;
			$data = array('server_name' => $request->name);
			$updated = Server::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$server = $server->save();
			if ($server) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_server(Request $request) {
		$data = array();
		$count = 1;

		$server = Server::where("id", $request->uid)->first();

		return $server;
	}

	public function delete_server(Request $request) {

		$data = array();
		$count = 1;
		$server = Server::where("id", $request->uid)->delete();

		if ($server) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_server(Request $request) {

		$data = array();
		$count = 0;

		$server = Server::select('*')->get();
		if (!is_null($server)) {
			foreach ($server as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'name' => $value->server_name,
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
	// for server end

	// paypal settings
	public function paypalsettings() {

		return view('admin.paypal_config');
	}
	public function add_paypal(Request $request) {

		$paypal = new Paypal();
		$paypal->paypalid = $request->paypal_id;
		$paypal->paypalclientid = $request->paypal_client_id;
		$paypal->paypalsecratekey = $request->paypal_secrate_key;

		// for update
		if (@$request->id) {
			$paypal->id = $request->id;
			$data = array('paypalid' => $request->paypal_id, 'paypalclientid' => $request->paypal_client_id, 'paypalsecratekey' => $request->paypal_secrate_key);
			$updated = Paypal::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$paypal = $paypal->save();
			if ($paypal) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}
	public function read_paypal(Request $request) {
		$data = array();
		$count = 1;

		$paypal = Paypal::where("id", '1')->first();

		return $paypal;
	}
	// End Paypal Settings

}
