<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

//admin panel start //

Route::group(['middleware' => 'ipcheck'], function () {
	Route::get('admin', 'admin\AdminController@adminLogin');
	Route::post('loginProcess', 'admin\AdminController@loginProcess');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
	Route::get('dashboard', 'admin\AdminController@dashboard');
	Route::get('users', 'admin\AdminController@users')->name('users');
	Route::get('livewager', 'admin\AdminController@livewager')->name('livewager');
	Route::get('liveMatch/{gamekey}', 'admin\AdminController@liveMatch');

	Route::get('completedwager', 'admin\AdminController@completedwager')->name('completedwager');
	Route::get('disputed', 'admin\AdminController@disputed')->name('disputed');

	Route::get('alltransaction/{email?}', 'admin\AdminController@alltransaction');
	Route::get('logout', 'admin\AdminController@logout');

	Route::get('gamemode', 'admin\WagerDetailsController@gamemodeview')->name('gamemode');
	Route::post('add_gamemode', 'admin\WagerDetailsController@add_gamemode')->name('add_gamemode');
	Route::post('update_gamemode', 'admin\WagerDetailsController@update_gamemode')->name('update_gamemode');
	Route::post('delete_gamemode', 'admin\WagerDetailsController@delete_gamemode')->name('delete_gamemode');
	Route::get('read_gamemode', 'admin\WagerDetailsController@read_gamemode')->name('read_gamemode');

	Route::get('team', 'admin\WagerDetailsController@teamview')->name('team');
	Route::post('add_team', 'admin\WagerDetailsController@add_team')->name('add_team');
	Route::post('update_team', 'admin\WagerDetailsController@update_team')->name('update_team');
	Route::post('delete_team', 'admin\WagerDetailsController@delete_team')->name('delete_team');
	Route::get('read_team', 'admin\WagerDetailsController@read_team')->name('read_team');

	Route::get('amount', 'admin\WagerDetailsController@gameamountview')->name('amount');
	Route::post('add_amount', 'admin\WagerDetailsController@add_amount')->name('add_amount');
	Route::post('update_amount', 'admin\WagerDetailsController@update_amount')->name('update_amount');
	Route::post('delete_amount', 'admin\WagerDetailsController@delete_amount')->name('delete_amount');
	Route::get('read_amount', 'admin\WagerDetailsController@read_amount')->name('read_amount');

	Route::get('platform', 'admin\WagerDetailsController@platformview')->name('platform');
	Route::post('add_platform', 'admin\WagerDetailsController@add_platform')->name('add_platform');
	Route::post('update_platform', 'admin\WagerDetailsController@update_platform')->name('update_platform');
	Route::post('delete_platform', 'admin\WagerDetailsController@delete_platform')->name('delete_platform');
	Route::get('read_platform', 'admin\WagerDetailsController@read_platform')->name('read_platform');

	Route::get('server', 'admin\WagerDetailsController@serverview')->name('server');
	Route::post('add_server', 'admin\WagerDetailsController@add_server')->name('add_server');
	Route::post('update_server', 'admin\WagerDetailsController@update_server')->name('update_server');
	Route::post('delete_server', 'admin\WagerDetailsController@delete_server')->name('delete_server');
	Route::get('read_server', 'admin\WagerDetailsController@read_server')->name('read_server');

	Route::get('codecreators', 'admin\CodecreatorsController@codecreators')->name('codecreators');
	Route::post('add_codecreators', 'admin\CodecreatorsController@add_codecreators')->name('add_codecreators');
	Route::post('update_codecreators', 'admin\CodecreatorsController@update_codecreators')->name('update_codecreators');
	Route::post('delete_codecreators', 'admin\CodecreatorsController@delete_codecreators')->name('delete_codecreators');
	Route::get('read_codecreators', 'admin\CodecreatorsController@read_codecreators')->name('read_codecreators');
	Route::get('contentcreators/{email?}', 'admin\CodecreatorsController@contentcreators')->name('contentcreators');

	Route::get('checkcontentcreators', 'admin\CodecreatorsController@checkcontentcreators');

	Route::post('add_contentcreators', 'admin\CodecreatorsController@add_contentcreators')->name('add_contentcreators');
	Route::get('read_contentcreators', 'admin\CodecreatorsController@read_contentcreators')->name('read_contentcreators');
	Route::post('delete_contentcreators', 'admin\CodecreatorsController@delete_contentcreators')->name('delete_contentcreators');

	Route::get('createuserdetailsview/{email?}', 'admin\UserDetailsAdminController@createuserdetailsview')->name('createuserdetailsview');
	
	Route::post('changeuserinfo', 'admin\UserDetailsAdminController@changeuserinfo')->name('changeuserinfo');
	Route::post('get_userdata', 'admin\UserDetailsAdminController@get_userdata')->name('get_userdata');

	Route::get('search_user', 'admin\SearchuserController@search_user');

	Route::get('transferamount/{email}', 'admin\Transfer_Amount_User@transferamount');
	Route::get('transferamount', 'admin\Transfer_Amount_User@transferamount')->name('transferamount');
	Route::post('add_transferamount', 'admin\Transfer_Amount_User@add_transferamount')->name('add_transferamount');
	Route::get('read_transferamount', 'admin\Transfer_Amount_User@read_transferamount')->name('read_transferamount');
	Route::get('disputedgame/{gamekey}', 'admin\AdminController@disputedgame');
	Route::post('disputedscore', 'admin\AdminController@disputedscore')->name('disputedscore');

	Route::get('gamedetails/{gamekey}', 'admin\AdminController@gamedetails');
	Route::get('terminated', 'admin\AdminController@terminated')->name('terminated');

	Route::get('createadminview/{email}', 'admin\AdminController@create_admin_view')->name('createadminview');
	Route::post('createadmin', 'admin\AdminController@create_admin')->name('createadmin');
	Route::get('read_adminusers', 'admin\AdminController@read_adminusers')->name('read_adminusers');
	Route::post('update_adminusers', 'admin\AdminController@update_adminusers')->name('update_adminusers');
	Route::post('delete_adminusers', 'admin\AdminController@delete_adminusers')->name('delete_adminusers');
	Route::post('assign_admin', 'admin\AdminController@assign_admin')->name('assign_admin');
	Route::post('remove_admin', 'admin\AdminController@remove_admin')->name('remove_admin');
	Route::get('terminateddetails/{gamekey}', 'admin\AdminController@terminateddetails');

	Route::get('paypalsettings', 'admin\WagerDetailsController@paypalsettings')->name('paypalsettings');
	Route::post('add_paypal', 'admin\WagerDetailsController@add_paypal')->name('add_paypal');
	Route::get('read_paypal', 'admin\WagerDetailsController@read_paypal')->name('read_paypal');

	// comment
	Route::post('add_comment', 'admin\AdminController@add_comment')->name('add_comment');
	Route::post('view_comment', 'admin\AdminController@view_comment')->name('view_comment');
	Route::get('disputed_data', 'admin\AdminController@disputed_data')->name('disputed_data');
	Route::post('admin_terminate_game', 'admin\AdminController@admin_terminate_game')->name('admin_terminate_game');
	
});
//admin panel end //

// front side start
Route::get('/', 'front\IndexController@index')->name('index');
Route::post('userRegi', 'front\IndexController@addRegi');
Route::get('checkMail', 'front\IndexController@checkMail');
Route::get('checkEpic', 'front\IndexController@checkEpic');
Route::post('userlogin1', 'front\IndexController@userlogin');
Route::get('registration', 'front\IndexController@registration')->name('registration');
//Route::get('mylogin','front\IndexController@login')->name('mylogin');
Route::post('updateProfile', 'front\IndexController@updateProfile');
Route::post('currentPasswordUpdate', 'front\IndexController@currentPasswordUpdate');

//paypal controller
Route::get('cancel', 'front\PayPalController@cancel')->name('cancel');
Route::any('success', 'front\PayPalController@success');
Route::post('getAmount', 'front\PayPalController@getAmount');
//Route::any('payment-status',array('as'=>'payment.status','uses'=>'front\PaymentController@paymentInfo'));

//Route::get('payment',array('as'=>'payment','uses'=>'front\PaymentController@payment'));
//Route::get('payment-cancel', function () {
//  return 'Payment has been canceled';
//});
// page controller
Route::get('faq', 'front\PageController@faq')->name('faq');
Route::get('privacy-policy', 'front\PageController@privacy_policy')->name('privacy-policy');
Route::get('terms', 'front\PageController@term_condition')->name('terms');
Route::get('contact-us', 'front\PageController@contact')->name('contact-us');
Route::any('contactform', 'front\PageController@contactform')->name('contactform');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('get_platform', 'front\GetdataforWagers@get_platform')->name('get_platform');
Route::get('get_amount', 'front\GetdataforWagers@get_amount')->name('get_amount');

Auth::routes();
Route::get('verifyprofile/{email?}', 'front\UserprofileController@verifyprofile')->name('verifyprofile');
Route::get('get_wager_list/{wagername?}', 'front\WagersController@get_wager_list')->name('get_wager_list');
Route::get('wager/{wagername?}', 'front\WagersController@wager');
Route::group(['middleware' => ['userlogin']], function () {

	Route::get('profile', 'front\PageController@profile');
	Route::post('profileimage', 'front\UserprofileController@profileimage')->name('profileimage');
	Route::any('place_wager', 'front\WagersController@place_wager')->name('place_wager');
	Route::get('get_wager', 'front\WagersController@get_wager')->name('get_wager');
	Route::post('check_player_joined', 'front\ConfirmController@check_player_joined')->name('check_player_joined');
	Route::post('checkedBalance', 'front\WagersController@checkedBalance')->name('checkedBalance');

	Route::get('delete_wager', 'front\WagersController@delete_wager')->name('delete_wager');
	Route::get('confirm/{wagername?}/{team?}', 'front\ConfirmController@confirm')->name('confirm');
	Route::post('confirm_user', 'front\ConfirmController@confirm_user')->name('confirm_user');
	Route::post('check_confirmation', 'front\ConfirmController@check_confirmation')->name('check_confirmation');
	Route::post('send-message', ['as' => 'send-message', 'uses' => 'front\ConfirmController@send_message']);
	Route::post('get_chat_history_by_vendor', ['as' => 'get_chat_history_by_vendor', 'uses' => 'front\ConfirmController@get_chat_history_by_vendor']);
	Route::post('get_opponent_info', 'front\ConfirmController@get_opponent_info')->name('get_opponent_info');
	Route::post('get_2v2_opponent_info', 'front\ConfirmController@get_2v2_opponent_info')->name('get_2v2_opponent_info');
	Route::post('get_member_info', 'front\ConfirmController@get_member_info')->name('get_member_info');

	Route::get('checkcontentcreators_assign', 'front\UserprofileController@checkcontentcreators_assign')->name('checkcontentcreators_assign');
	Route::get('read_transactiondata', 'front\UserprofileController@read_transactiondata')->name('read_transactiondata');
	Route::get('userprofile/{email?}', 'front\UserprofileController@userprofile')->name('userprofile');
	Route::post('updateprofile', 'front\UserprofileController@updateprofile')->name('updateprofile');
	Route::post('updateuserinfo', 'front\UserprofileController@updateuserinfo')->name('updateuserinfo');
	Route::post('updateuserinfovalorant', 'front\UserprofileController@updateuserinfovalorant')->name('updateuserinfovalorant');
	Route::get('get_profile_id', 'front\UserprofileController@get_profile_id')->name('get_profile_id');
	Route::get('get_user_gameinfo', 'front\UserprofileController@get_user_gameinfo')->name('get_user_gameinfo');
	Route::post('veryfyepic', 'front\UserprofileController@veryfyepic')->name('veryfyepic');
	Route::post('get_user_gamedata', 'front\UserprofileController@get_user_gamedata')->name('get_user_gamedata');

	Route::get('lobby/{wagerid?}', 'front\LobbyController@lobby')->name('lobby');
	Route::post('score_enter', 'front\LobbyController@score_enter')->name('score_enter');
	Route::post('get_current_game_info', 'front\LobbyController@get_current_game_info')->name('get_current_game_info');
	Route::post('get_current_game_info_completed', 'front\LobbyController@get_current_game_info_completed')->name('get_current_game_info_completed');
	Route::post('confirm_score', 'front\LobbyController@confirm_score')->name('confirm_score');
	Route::post('dispute', 'front\LobbyController@dispute')->name('dispute');

	Route::post('gamecancel', 'front\ConfirmController@gamecancel')->name('gamecancel');
	//  Route::get('chat','front\ConfirmController@chat')->name('chat');
	Route::post('check_cancelgame', 'front\ConfirmController@check_cancelgame')->name('check_cancelgame');

	//chat start
	Route::get('/chat', 'front\ChatController@index')->name('chat');
	Route::any('/message/{id}/{chatkey}', 'front\ChatController@getMessage');
	Route::post('sendMessage', 'front\ChatController@sendMessage');

	Route::get('search_friend', 'front\SearchController@search_friend')->name('search_friend');
	Route::post('send_request', 'front\ConfirmController@send_request')->name('send_request');

	Route::post('get_request', 'front\ConfirmController@get_request')->name('get_request');
	Route::any('cansel_request', 'front\ConfirmController@cansel_request')->name('cansel_request');
	Route::any('friend_cansel_request', 'front\ConfirmController@friend_cansel_request')->name('friend_cansel_request');

	Route::post('addfriend', 'front\ConfirmController@addfriend')->name('addfriend');
	Route::post('addfriendconfirm', 'front\ConfirmController@addfriendconfirm')->name('addfriendconfirm');

	Route::post('check_info', 'front\ConfirmController@check_info')->name('check_info');
	Route::get('getfriend', 'front\UserprofileController@getfriend')->name('getfriend');
	Route::get('getprofilefriend', 'front\UserprofileController@getprofilefriend')->name('getprofilefriend');

	Route::post('terminate_game', 'front\LobbyController@terminate_game')->name('terminate_game');
	Route::post('get_start_time', 'front\LobbyController@get_start_time')->name('get_start_time');

	Route::post('check_ingame', 'front\WagersController@check_ingame')->name('check_ingame');
	Route::post('check_ingamedisputed', 'front\WagersController@check_ingamedisputed')->name('check_ingamedisputed');

	Route::get('get_servers', 'front\GetdataforWagers@get_servers')->name('get_servers');

	Route::post('teamselect', 'front\WagersController@teamselect')->name('teamselect');
	Route::post('check_dispute', 'front\WagersController@check_dispute')->name('check_dispute');
	Route::get('disputedpage/{id?}', 'front\LobbyController@disputedpage')->name('disputedpage');
	Route::post('withdraw', 'front\UserprofileController@withdraw')->name('withdraw');
	Route::get('getfriendrequest', 'front\UserprofileController@getfriendrequest')->name('getfriendrequest');

	Route::get('check_withdraw_info', 'front\UserprofileController@check_withdraw_info');
	Route::post('cn_check_password', 'front\WagersController@cn_check_password')->name('cn_check_password');
	Route::post('public_check', 'front\WagersController@public_check')->name('public_check');
	Route::post('get_start_timer_confirm', 'front\WagersController@get_start_timer_confirm')->name('get_start_timer_confirm');

	Route::post('dispute_image', 'front\LobbyController@dispute_image')->name('dispute_image');
	Route::post('check_notifications', 'front\NotificationController@check_notifications')->name('check_notifications');
	Route::post('viewed_notifications', 'front\NotificationController@viewed_notifications')->name('viewed_notifications');
	Route::post('paypal_history', 'front\PayPalController@paypal_history')->name('paypal_history');
    
});
