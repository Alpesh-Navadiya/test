<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\AssignContentCreators;
use App\Model\Admin\Codecreators;
use Illuminate\Http\Request;
use DB;
class CodecreatorsController extends Controller {

	public function codecreators() {
		return view('admin.codecreators');
	}

	public function add_codecreators(Request $request) {

		$codecreate = new Codecreators();
		$codecreate->codecreator_name = $request->name;
		$codecreate->codecreator_amount = $request->code_amount;
		$codecreate->codecreator_type = $request->codecreatortype;
		$codecreate->codecreator_uniqid = uniqid();

		// for update
		if (@$request->id) {
			$codecreate->id = $request->id;
			$data = array('codecreator_name' => $request->name, 'codecreator_amount' => $request->code_amount, 'codecreator_type' => $request->codecreatortype);
			$data1 = array('code_create_amount' => $request->code_amount);
			$updated = AssignContentCreators::where('code_create_id', $request->id)->update($data1);
			$updated = Codecreators::where('id', $request->id)->update($data);
			if ($updated) {
				echo "Updated";
			} else {
				echo "false";
			}
		}
		// for insert
		else {
			$codecreate = $codecreate->save();
			if ($codecreate) {
				echo "Added";
			} else {
				echo "false";
			}
		}
	}

	public function update_codecreators(Request $request) {
		$data = array();
		$count = 1;

		$codecreate = Codecreators::where("id", $request->uid)->first();

		return $codecreate;
	}

	public function delete_codecreators(Request $request) {

		$data = array();
		$count = 1;

		$codecreate = AssignContentCreators::where("code_create_id", $request->uid)->delete();
		$codecreate = Codecreators::where("id", $request->uid)->delete();

		if ($codecreate) {
			return "Deleted";
		} else {
			return "false";
		}
	}

	public function read_codecreators(Request $request) {

		$data = array();
		$count = 1;

		$codecreate = Codecreators::select('*')->get();
		if (!is_null($codecreate)) {
			foreach ($codecreate as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="info" onClick="edit_data(' . $id . ')">Edit</a> | <a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				if ($value->codecreator_type == "0") {
					$codecreator_type = "One Time";
				} else {
					$codecreator_type = "Continuously";
				}
				$data[] = array(
					'gtype' => $value->codecreator_name,
					'name' => $value->codecreator_amount,
					'ctype' => $value->codecreator_type,
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

	// content Creators
	public function checkcontentcreators(Request $request) {
		$data = $request->all();
		$check = AssignContentCreators::where("gamername", $request->uname)->count();
		if ($check > 0) {
			echo 'false';
		} else {
			echo 'true';
		}
	}

	public function contentcreators($email = null) {
		$codecreates = Codecreators::select('*')->get();
		return view('admin.contentcreators', compact('codecreates', 'email'));
	}
	public function add_contentcreators(Request $request) {

		$contentcreate = new AssignContentCreators();
		$contentcreate->gamername = $request->uname;

		$codecreates = Codecreators::where('id', $request->code_id)->first();
		$camount = $codecreates['codecreator_amount'];
		$cid = $codecreates['id'];
		$cuniqid = $codecreates['codecreator_uniqid'];

		$contentcreate->code_create_id = $cid;
		$contentcreate->code_create_amount = $camount;

		$invitation = substr(md5(rand(0, 9) . $request->uname . $cuniqid . time()), 0, 32);

		$contentcreate->uniqkey = urldecode(route('index') . '?invitation_token=' . $invitation);

		$contentcreate = $contentcreate->save();
		$trnTime = date('Y-m-d H:i:s');
		
		if ($contentcreate) {
			echo "Content Creator Created";
			$noti_array = array('noti_type'=>'Content Creator','noti_info'=>'Admin Added You As Content Creators','noti_link'=>urldecode(route('userprofile').'#teams'),'noti_gamer'=>$request->uname,'created_at' => $trnTime);
			DB::table('notification')->insert($noti_array);
     
		} else {
			echo "false";
		}
	}
	public function read_contentcreators(Request $request) {

		$data = array();
		$count = 1;

		$codecreate = AssignContentCreators::select('*')->get();
		if (!is_null($codecreate)) {
			foreach ($codecreate as $key => $value) {
				$id = "'" . $value->id . "'";
				$action = '<a href="javascript:void(0)" class="error" onClick="delete_data(' . $id . ')">Delete</a>';
				$data[] = array(
					'gtype' => $value->gamername,
					'name' => $value->uniqkey,
					'amount' => '$' . $value->code_create_amount,
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
	public function delete_contentcreators(Request $request) {

		$data = array();
		$count = 1;

		$codecreate = AssignContentCreators::where("id", $request->uid)->delete();

		if ($codecreate) {
			return "Deleted";
		} else {
			return "false";
		}
	}

}
