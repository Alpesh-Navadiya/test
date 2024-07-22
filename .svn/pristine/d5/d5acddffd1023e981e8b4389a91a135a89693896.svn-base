<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Server; 
use App\Model\Admin\Platform;
use App\Model\Admin\Amount;

class GetdataforWagers extends Controller
{
    
    public function get_servers(){
        $server = Server::select('server_name')->get();
        return $server;
    }

    public function get_platform(){
        
        $server = Platform::select('platform')->get();
        return $server;

    }

    public function get_amount(){
        $amount = Amount::select('amount','prize')->get();
        return $amount;
    }
}
