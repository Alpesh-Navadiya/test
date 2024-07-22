<?php

namespace App\Http\Controllers\front;
use App\Model\Notification_model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class NotificationController extends Controller
{
    public function check_notifications() {
		$gamername = Auth::user()->email;
		$check = Notification_model::where('noti_gamer', $gamername)->where('noti_status','0')->count();
		if ($check == "0") {
			$notifications = Notification_model::where('noti_gamer', $gamername)->where('noti_status','1')->orderBy('id', 'DESC')->take(10)->get();
		} else {
            $notifications = Notification_model::where('noti_gamer', $gamername)->where('noti_status','0')->orderBy('id', 'DESC')->take(15)->get();
        }
        return $notifications;
	}

	public function viewed_notifications() {
		$gamername = Auth::user()->email;
		$check = Notification_model::where('noti_gamer', $gamername)->where('noti_status','0')->count();
		if ($check == "0") {
			return "false";
		} else {
			$data = array('noti_status' => '1');
			$notifications = Notification_model::where('noti_gamer', $gamername)->where('noti_status','0')->update($data);
			return "true";
        }
	}
}
