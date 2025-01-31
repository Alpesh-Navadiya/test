@extends('layouts.profileLayout.profile_design')
@section('title','profile')
@section('content')
<link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ url('public/css/toastr.css') }}">
<style>
  dl,
  ol,
  ul,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  label,
  input,
  button,
  p,
  span,
  select,
  option {
    /*font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif !important;*/
  }

  .user-profiledata .nav a,
  .user-profiledata .tracking-wide,
  .user-profiledata .leading-relaxed,
  .teamdata-left .list-group-item {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
  }

  .user-profiledata .deposit-tabs .tab-pane {
    width: 80% !important;
  }

  .user-profiledata ul#myTab {
    padding: 45px 20px !important;
  }

  .user-profiledata .relative h6 {
    text-transform: capitalize;
    font-size: 18px;
  }

  ul.pagination {
    font-size: 12px !important;
  }

  .user-profiledata .modal-header .close {
    padding: 9px 18px 9px 18px !important;
    margin: 0 !important;
  }

  dl,
  ol,
  ul {
    transition: all 0.2s;
    font-weight: bold !important;
    /*font-family: "Rubik", sans-serif;*/
    font-size: 16px !important;
  }

  #depositbtn {
    cursor: pointer;
    padding: 3 -px 0px;
    padding-right: 50px;
    padding-left: 50px;
    color: white;
    background-color: #25B5A5;
  }

  li.nav-item a {
    font-size: 14px;
    font-weight: 900;
    color: #51cbce;
  }

  .btn-green {
    font-size: 12px;
  }

  .table td,
  .table th {
    border-top: 0px !important;
  }

  ::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  ::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color: #555;
  }

  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #F5F5F5;
  }

  .pb-3 {
    margin-top: 30px
  }
</style>

<div class="main user-profiledata">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center">
        <div class="relative text-black-text py-8 px-10 mb-8 card text-center ">
          <div class="flex flex-row ">

            <div class="h-20 w-50">

              <center>

                <?php


                if (auth()->user()->pimage != '') { ?>
                  <img class="prospect_pic pros-image" src="{{url('public/assets/images')}}/<?php echo auth()->user()->pimage; ?>" alt="Profile Picture" width="80px" height="80px" />
                <?php } else { ?>
                  <img class="prospect_pic pros-image" src="{{url('public/assets/images/11.png')}}" alt="Profile Picture" width="80px" height="80px" />
                <?php } ?>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script>
                  function addimage(e) {
                    $('.pros-image').attr('src', $(e).attr("src"));
                    $('#header_user_img').attr('src', $(e).attr("src"));
                    var arr = $(e).attr("src").split('/');
                    var img_name = arr.pop();

                    $("#P_PhotoUrl").val(arr[6]);
                    var proImageName = img_name;


                    $('#myModal').modal('toggle');
                    $.ajax({
                      url: "{{route('profileimage')}}",
                      method: 'POST',
                      data: {
                        proImageName: proImageName
                      },
                      success: function(data) {
                        // toastr.info('Profile Image Changed');
                        $("#success_text").html('Your Profile Image Is Changed...');
                        $('#successModal').modal('show');

                      },
                      error: function() {

                        $("#success_text").html('Something Wrong...');
                        $('#errorModal').modal('show');
                      }
                    });
                  }
                </script>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog" style="width:800px;">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Select Prospects Image</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/12.png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/13.png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/14.png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (7).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (8).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>

                        </div>
                        <div class="row">

                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (9).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (4).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (5).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (6).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (10).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (11).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (12).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (13).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (14).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (15).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (16).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (17).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>
                          <div class="col-md-2">
                            <img class="prospect_pic" src="{{url('public/assets/images/1 (18).png')}}" alt="Profile Picture" onclick="addimage(this)" />
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </center>
              <h6 class="font-bold text-base mt-2">
                {{ auth()->user()->name }} <a class="fa fa-plus-circle pointer" href="#" data-toggle="modal" data-target="#myModal"></a></h6>
            </div>
            <div class="flex flex-col justify-center text-center">
              <div class="flex flex-row leading-relaxed text-center" style="margin-top: 14px">
                <p class="text-black-text opacity-50" style="width: 100%;margin-bottom: 0"><span class="font-bold uppercase text-center epicid"> <?php
                                                                                                                                                  if (isset(auth()->user()->epicid)) {
                                                                                                                                                    echo auth()->user()->epicid;
                                                                                                                                                  } else {
                                                                                                                                                    echo 'N/A';
                                                                                                                                                  }
                                                                                                                                                  ?>
                  </span></p>
              </div>

              <div class="flex flex-row leading-relaxed text-center">
                <p class="text-black-text opacity-50" style="width: 100%;margin-bottom: 0"><span class="font-bold uppercase text-center valorantid">
                    <?php
                    if (isset(auth()->user()->valorantid)) {
                      echo auth()->user()->valorantid;
                    } else {
                      echo 'N/A';
                    }
                    ?>
                  </span></p>
              </div>
              <div class="leading-relaxed text-sm ">
                <?php
                if (isset(auth()->user()->server)) {
                  echo auth()->user()->server;
                } else {
                  echo 'N/A';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="home" aria-selected="true">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#teams" role="tab" aria-controls="profile" aria-selected="false">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deposit-withdraw" role="tab" aria-controls="contact" aria-selected="false">Deposit/withdraw</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="contact" aria-selected="false">History</a>
          </li>
        </ul>

      </div>

    </div>
    <div class="row">
      <div class="col-12">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
            <main class="w-full ">
              <div>

                <div class="px-10 md:px-16 w-full mb-12 py-10 card  ">
                  <h1 class="text-md mb-4 text-black-text font-bold uppercase ">edit profile</h1>
                  <form style="width: 100%" action="{{ route('updateprofile') }}" name="profile-form" id="profile-form" method="post">
                    <div class="flex flex-row items-center justify-start md:flex-no-wrap flex-wrap pr-0">
                      <div class="flex flex-col md:w-1/2 w-full md:mr-16">
                        <div class="relative mt-5 "><label for="firstName" class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">first
                            name</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" value="<?php echo auth()->user()->name; ?>" name="name" id="name" type="text"></div>
                      </div>
                      <div class="flex flex-col md:w-1/2 w-full  md:mt-0">
                        <div class="relative mt-5 "><label for="lastName" class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">Server</label>
                          <select class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight search-slt server1" id="server1" name="server1" required>
                            <option class="mobile-option-header" value="">Server</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-row items-center justify-start md:flex-no-wrap flex-wrap pr-0">
                      <div class="md:w-1/2 w-full md:mr-16 relative">

                        <div class="relative mt-5 "><label class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">email <i id="lw-email-icon" class="fa fa-check-circle" style="color: red;font-size: 20px;" aria-hidden="true"> <span id="lw-email-text"></span></i></label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" type="email" value="<?php echo auth()->user()->email; ?>" disabled></div>
                      </div>
                      <div class="md:w-1/2 w-full  md:mt-0 relative">

                        <div class="relative mt-5 "><label class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">paypal
                            email</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" type="text" id="paypalemail" name="paypalemail" value="<?php echo auth()->user()->paypalemail; ?>"></div>
                      </div>


                    </div>

                    <div class="flex flex-row items-center justify-start md:flex-no-wrap flex-wrap pr-0">
                      <div class="md:w-1/2 w-full md:mr-16 relative">

                        <div class="relative mt-5 "><label class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">Valorantid</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" type="text" name="valorantid" id="valorantid" placeholder="Your Valorant ID" value=""></div>
                      </div>
                      <div class="md:w-1/2 w-full  md:mt-0 relative">

                        <div class="relative mt-5 "><label class="block -mt-6 scale-80 opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">Epicid <i id="lw-tracker-icon" class="fa fa-check-circle" style="color: red;font-size: 20px;" aria-hidden="true"> <span id="lw-tracker-text"></span></i></label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" type="text" name="epicid" id="epicid" placeholder="Your Epic ID" value="">
                        </div>
                      </div>


                    </div>

                    <div class="flex flex-row items-center justify-start">

                      <input type="submit" name="profile-sub" id="profile-sub" class="px-16 py-3 text-black-themed btn-green uppercase rounded-md items-center text-center font-bold" value="Update Profile">

                      <!-- <input type="button" name="verify_profile" id="verify_profile" class="px-16 py-3 text-black-themed btn-green uppercase rounded-md items-center text-center font-bold" value="Veryfy Epic Id"> -->

                    </div>
                  </form>
                </div>

                <div class="px-10 md:px-16 w-full mb-12 py-10 card  ">
                  <form class="form-horizontal" method="post" action="{{url('/currentPasswordUpdate')}}" id="password_validate">
                    <h1 class="text-md mb-4 text-black-text font-bold uppercase mt-8">change password</h1>
                    <div class="flex flex-row items-center justify-start md:flex-no-wrap flex-wrap mt-5 pr-0">
                      <div class="flex flex-col md:w-1/2 w-full md:mr-16">
                        <div class="relative mt-5 "><label for="currentPassword" class="block  opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">Current
                            Password</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" name="current" id="current" placeholder="Current Password " type="password" value="">
                        </div>
                      </div>
                      <div class="flex flex-col md:w-1/2 w-full"></div>
                    </div>
                    <div class="flex flex-row items-center justify-start md:flex-no-wrap flex-wrap pr-0">
                      <div class="flex flex-col md:w-1/2 w-full md:mr-16">
                        <div class="relative mt-5 "><label for="newPassword" class="block  opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">New
                            Password</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" name="password_update" placeholder="New Password" id="password_update" type="password" value=""></div>
                      </div>
                      <div class="flex flex-col md:w-1/2 w-full  md:mt-0">
                        <div class="relative mt-5 "><label for="confirmNewPassword" class="block  opacity-50 uppercase pointer-events-none appearance-none text-sm absolute tracking-normal text-black-text font-semibold whitespace-no-wrap" style="transition: margin-top 0.2s ease 0s, transform;">Confirm
                            Password (again)</label><input class="w-full  text-black-text border-input-soft rounded-none border-b placeholder-grey-borderAlt bg-transparent focus:outline-none text-md font-medium pb-3 pl-0 mb-3 leading-tight" name="confirmPassword" id="confirmPassword_update" placeholder="Confirm Password" type="password" value=""></div>
                      </div>
                    </div>

                    <div class="flex flex-row items-center justify-start">
                      <button type="submit" id="profile_updates" class="px-16 py-3 text-black-themed btn-green uppercase rounded-md items-center text-center font-bold ">
                        save changes
                      </button>
                    </div>
                  </form>
                </div>

              </div>
            </main>
          </div>
          <div class="tab-pane fade" id="teams" role="tabpanel" aria-labelledby="profile-tab">
            <main class="w-full ">
              <div class="card">
                <ul class="nav nav-tabs" id="teams_tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="teams_tab" data-toggle="tab" href="#team" role="tab" aria-controls="teams" aria-selected="true">Teams</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="invites-tab" data-toggle="tab" href="#invites" role="tab" aria-controls="invites" aria-selected="false">Invites</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="create-team-tab" data-toggle="tab" href="#create-team" role="tab" aria-controls="create-team" aria-selected="false">Invite Player</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="create-team-tab1" data-toggle="tab" href="#gameRequest" role="tab" aria-controls="create-team" aria-selected="false">Game Player Request</a>
                  </li>
                  <li class="nav-item contentcreator" style="display: none;">
                    <a class="nav-link" id="create-contentcreator-tab" data-toggle="tab" href="#create-contentcreator" role="tab" aria-controls="create-contentcreator" aria-selected="false">Share And Earn</a>
                  </li>
                </ul>
                <div class="tab-content" id="teams-content">
                  <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="teams-tab">
                    <div class="row" id="friend_lists">
                    </div>

                  </div>
                  <div class="tab-pane fade" id="invites" role="tabpanel" aria-labelledby="invites-tab">
                    <div class="row" id="friend_lists_confirm">
                    </div>

                  </div>

                  <div class="tab-pane fade" id="gameRequest" role="tabpanel" aria-labelledby="gameRequest-tab">
                    <div class="row" id="game_list_req">
                    </div>

                  </div>


                  <div class="tab-pane fade" id="create-contentcreator" role="tabpanel" aria-labelledby="create-contentcreator-tab">
                    <div class="row" id="share-link">
                      <h2>Share Link</h2>

                      <input type="link" id="share_link" style="width: 100%" readonly>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="create-team" role="tabpanel" aria-labelledby="create-team-tab">
                    <center>
                      <style>
                        .teamdata-left .input-group {
                          display: inherit !important;
                        }

                        .twitter-typeahead,
                        .tt-hint,
                        .tt-input,
                        .tt-menu {
                          width: 100% ! important;
                          font-weight: normal;
                        }

                        .teamdata-left .list-group-item {
                          text-align: left;
                          margin-bottom: 11px;
                        }
                      </style>
                      <div class="row">

                        <div class="col col-12 col-md-12 teamdata-left">
                          <div class="form-group">

                            <div class="input-group">
                              <input class="form-control typeahead" style="height: auto;" type="text" id="search" name="frndne" autocomplete="off" placeholder="Enter Epic Or Valorant Id of Friend">

                            </div>

                          </div>

                        </div>

                        <!-- <div class="col-12 text-center">
                                                <button type="button" class="btn"
                                                        style="    background: black !important;">Create
                                                </button>
                                            </div> -->

                      </div>
                    </center>
                  </div>
                </div>
              </div>
            </main>

          </div>
          <div class="tab-pane fade" id="deposit-withdraw" role="tabpanel" aria-labelledby="contact-tab">
            <div class="deposit-tabs">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link login_modal active" data-toggle="tab" href="#panel7" role="tab" aria-selected="true">
                    DEPOSIT</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link register_modal" data-toggle="tab" href="#panel8" role="tab" aria-selected="false">
                    WITHDRAW</a>
                </li>
              </ul>
              <!-- Tab panels -->
              <div class="tab-content">
                <?php
                $paypalDetail = DB::table('paypals')->where('id', '1')->first();
                //  $paypalDetailCount = DB::table('paypals')->where('id','1')->count();
                // PayPal configuration
                define('PAYPAL_ID', @$paypalDetail->paypalid);
                define('PAYPAL_SANDBOX', TRUE);
                define('PAYPAL_CLIENT_ID', @$paypalDetail->paypalclientid);
                define('PAYPAL_SECRATE_KEY', @$paypalDetail->paypalsecratekey);
                //define('PAYPAL_RETURN_URL', 'http://loyalwagers.com/paying/success.php'); ATf-r5_8lgXvywwVpSWOcwtFi7rL17K8OXjtoCUJsS-bzYfZWmj4iYwowagjZxcT4SSeIJinjC3O4ewP
                //define('PAYPAL_CANCEL_URL', 'http://loyalwagers.com/paying/success.php');
                define('PAYPAL_CURRENCY', 'USD');
                // Change not required
                define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");
                $PAYPAL_URL = PAYPAL_URL;
                $PAYPAL_ID = PAYPAL_ID;
                $PAYPAL_CURRENCY = PAYPAL_CURRENCY;
                // $PAYPAL_RETURN_URL = PAYPAL_RETURN_URL;
                // $PAYPAL_CANCEL_URL = PAYPAL_CANCEL_URL;
                $Client_ID = PAYPAL_ID;
                ?>
                <script src="https://www.paypal.com/sdk/js?client-id=sb" data-csp-nonce="xyz-123"></script>



                <!--Panel 7-->
                <div class="tab-pane fade in active show" id="panel7" role="tabpanel">
                  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
                    <ul class="list-inline">
                      <?php
                      $count = 0;
                      $amounts = \DB::table('amounts')->get();

                      foreach ($amounts as $val) {
                        $count++;
                      ?>
                        <li onclick="amountVal(event);" class="list-inline-item" our_fees="<?php echo $val->our_fees; ?>" id="payamt<?php echo $count; ?>" value="<?php echo $val->amount ?>"><?php echo '$' . $val->amount ?></li>
                        <!-- <li class="list-inline-item" id="payamt" value="5">$5</li>
                                        <li class="list-inline-item" id="payamt" value="10">$10</li>
                                        <li class="list-inline-item" id="payamt" value="20">$20</li> -->
                      <?php } ?>
                    </ul>

                    <input type="hidden" name="business" value="<?php echo @$PAYPAL_ID; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="">
                    <input type="hidden" name="item_number" value="<?php echo auth()->user()->email; ?>">
                    <input type='hidden' name='currency_code' id='currency_code' value='<?php echo @$PAYPAL_CURRENCY; ?>'>
                    <input type="hidden" name="amount" id="amount" value="">

                    <input type='hidden' name='rm' value='2'>
                    <input type='hidden' name='return' value='{{ url("success")}}'>
                    <input type='hidden' name='cancel_return' value='{{ route("cancel")}}'>

                    <div class="deposit-card">
                      <div class="flex flex-col mt-8 mb-6">
                        <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                          <div class="flex flex-col "><span class="">Deposit fees&nbsp;</span></div>
                          <div class="flex flex-col flex-grow text-right deposit_amt"></div>
                        </div>
                        <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                          <div class="flex flex-col "><span class="">paypal fees&nbsp;</span></div>
                          <div class="flex flex-col flex-grow text-right"> <span class="paypal_fees_final"></span></div>
                        </div>
                        <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                          <div class="flex flex-col "><span class="">Our fees&nbsp;</span>
                          </div>
                          <div class="flex flex-col flex-grow text-right"><span id="">$0</span></div>
                        </div>
                        <hr class="opacity-40 mt-2 mb-2">
                        <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                          <div class="flex flex-col "><span class="">TOTAL&nbsp;</span></div>
                          <div class="flex flex-col flex-grow text-right  deposit_paypal"></div>
                        </div>
                      </div>
                    </div>
                    <!-- <ul class="flex flex-col" style="text-align:center">
                                        <li class="list-inline-item flex flex-col">Our Fees (Deposit): $<span id="our_fees_data"></span></li>

                                    </ul> -->


                    <div class="flex flex-row items-center justify-start">

                      <!-- <input class="w-full py-2.5 text-black-themed btn-green uppercase mx-auto rounded-md items-center text-center font-bold" id="depositbtn"  type="submit"   value="deposit">
                                    </div> -->


                      <div class="flex flex-row items-center justify-start" style="margin: 0 auto">
                        <button type="submit" id="depositbtn" class="w-full py-2.5 text-black-themed btn-green uppercase mx-auto rounded-md items-center text-center font-bold ">
                          deposit <span class="deposit_paypal"></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

                <!--/.Panel 7-->
                <!--Panel 8-->
                <div class="tab-pane fade" id="panel8" role="tabpanel">
                  <form id="withdraw-form" name="withdraw-form" action="{{ route('withdraw')}}" method="post">
                    <div class="flex flex-col mt-8 mb-6">
                      <div class="form-group">
                        <label for="paypal-email">Paypal Email</label>
                        <input type="email" name="wpaypalemail" class="form-control" id="wpaypalemail" value="<?php echo auth()->user()->paypalemail; ?>" placeholder="">
                        <input type="hidden" name="wamount" class="form-control" id="wamount" min="0
                                                .01" value="" required>
                        <input type="hidden" name="paybal" class="form-control" id="paybal" min="0
                                                .01" value="" required>
                      </div>
                      <ul class="list-inline">
                        <?php
                        $count = 0;
                        $amounts = \DB::table('amounts')->get();
                        foreach ($amounts as $val) {
                          $count++;
                        ?>
                          <li onclick="amountVal(event);" class="list-inline-item" our_fees="<?php echo $val->our_fees; ?>" id="payamt<?php echo $count; ?>" value="<?php echo $val->amount ?>"><?php echo '$' . $val->amount ?></li>

                        <?php } ?>

                      </ul>
                      <ul class="flex flex-col">
                        <li><span>Other Withdraw Amount</span></li>
                        <li><input type="number" our_fees="<?php echo $amounts[0]->our_fees; ?>" class="form-control" placeholder="Withdraw Amount" id="withdrawOther" onkeyup="myWthamt()" /></li>
                        <span id="ErrorMsg"></span>
                      </ul>
                      <div class="deposit-card">
                        <div class="flex flex-row text-xl text-black-text tracking-wide font-bold locked-balance">


                          <div class="flex flex-col "><span class="">Withdraw Balance &nbsp;</span></div>
                          <div class="flex flex-col flex-grow text-right"><span id="paypalAmtWithdraw"></div>
                        </div>
                        <div class="flex flex-col mt-8 mb-6">
                          <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                            <div class="flex flex-col "><span class="">paypal fees&nbsp;</span></div>
                            <div class="flex flex-col flex-grow text-right"><span id="paypal_fees_final"></span></div>
                          </div>
                          <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                            <div class="flex flex-col "><span class="">Our fees&nbsp;</span>
                            </div>
                            <div class="flex flex-col flex-grow text-right"><span id="our_fees_dataWithdraw"></span></div>
                          </div>
                          <hr class="opacity-40 mt-2 mb-2">
                          <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                            <div class="flex flex-col "><span class="">TOTAL&nbsp;</span></div>
                            <div class="flex flex-col flex-grow text-right"><span id="grand_total"></span></div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="form-group">
                                                <label for="exampleInputPassword1">Amount</label>
                                                <input type="number" name="wamount" id="wamount" min="0.01" step="any" class="form-control" id="exampleInputPassword1"
                                                       placeholder="$5">
                                            </div>

                                            <div class="flex flex-row text-xl text-black-text tracking-wide font-bold locked-balance">
                                                <div class="flex flex-col "><span class="">Locked Balance&nbsp;</span></div>
                                                <div class="flex flex-col flex-grow text-right">$10.00</div>
                                            </div>
                                            <hr class="opacity-40 mb-4">
                                            <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                                                <div class="flex flex-col "><span class="">our fees&nbsp;</span>
                                                </div>
                                                <div class="flex flex-col flex-grow text-right"><span id="our_fees_data"></div>
                                            </div>
                                            <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                                                <div class="flex flex-col "><span class="">paypal fees&nbsp;</span>
                                                </div>
                                                <div class="flex flex-col flex-grow text-right">$0.50</div>
                                            </div>


                                            <hr class="opacity-40 mt-4 mb-2">
                                            <div class="flex flex-row text-xl text-black-text tracking-wide font-bold">
                                                <div class="flex flex-col "><span class="">Amount to Receive&nbsp;</span></div>
                                                <div class="flex flex-col flex-grow text-right">$10.50</div>
                                            </div> -->
                    </div>
                    <div class="flex flex-row items-center justify-start">
                      <button id="withdraw-form-submit" name="withdraw-form-submit" type="submit" class="w-full py-2.5 text-black-themed btn-green uppercase mx-auto rounded-md items-center text-center font-bold ">
                        <span id="withdraw_txt">withdraw</span> <span id="withdraw-form-submit1"></span> <span style="display:none;" id="waite">Please Wait..</span></span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!--/.Panel 8-->
            </div>
          </div>
          <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
            <div class="deposit-tabs">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link login_modal active" data-toggle="tab" href="#transactions" role="tab" aria-selected="true">
                    Transactions</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link register_modal" data-toggle="tab" href="#wagers" role="tab" aria-selected="false">
                    Wagers</a>
                </li>
              </ul>
              <!-- Tab panels -->
              <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in active show" id="transactions" role="tabpanel">
                  <div class="py-4">
                    <div class="w-full">

                      <table id="trandata" class="table w-full text-base bg-white mb-4">
                        <thead>
                          <tr class="sc-bZQynM jwlnQH">
                            <th>
                              Mode
                            </th>
                            <th>
                              Deposit/Withdraw
                            </th>
                            <th>
                              Date
                            </th>
                          </tr>
                        </thead>

                      </table>
                    </div>
                    <!-- class=" uppercase text-black-text opacity-30 font-bold tracking-wide text-left p-6 px-0"<div class="ml-auto mt-4">
                                            <div class="opacity-30 float-right" style="width: 20px;">
                                                <svg viewBox="0 0 100 100">
                                                    <path transform="scale(-1, 1) translate(-100, 0)" fill="#333"
                                                          d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z"></path>
                                                </svg>
                                            </div>
                                            <div class="float-right text-md font-medium" style="margin-top: -4px;">1/1
                                            </div>
                                            <div class="opacity-30 float-right" style="width: 20px;">
                                                <svg viewBox="0 0 100 100">
                                                    <path transform="scale(1, 1) " fill="#333"
                                                          d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z"></path>
                                                </svg>
                                            </div>
                                        </div> -->
                  </div>
                </div>
                <!--/.Panel 7-->
                <!--Panel 8-->
                <div class="tab-pane fade" id="wagers" role="tabpanel">
                  <div class="py-4">
                    <div class="w-full">

                      <table id="example1" class="table w-full text-base bg-white mb-4">
                        <thead>
                          <tr>
                            <th>Game Mode</th>
                            <th>V\S</th>
                            <th>Amount</th>
                            <th>Prize</th>
                            <th>Score</th>
                            <th>Result</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($all_transaction)) { ?>
                            @foreach($all_transaction as $trans)
                            <tr>
                              <td>{{ $trans->gamemode }}</td>
                              <td>{{ $trans->vs_type }}</td>
                              <td>{{ $trans->amount }}</td>
                              <td>{{ $trans->prize }}</td>
                              <td>{{ $trans->score }}</td>
                              <td><?php if ($trans->result == 'L') {
                                    echo 'Lose';
                                  } else {
                                    echo 'Won';
                                  } ?> </td>
                            </tr>
                            @endforeach
                          <?php } ?>
                        </tbody>

                      </table>
                    </div>
                    <!-- <div class="ml-auto mt-4">
                                            <div class="opacity-30 float-right" style="width: 20px;">
                                                <svg viewBox="0 0 100 100">
                                                    <path transform="scale(-1, 1) translate(-100, 0)" fill="#333"
                                                          d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z"></path>
                                                </svg>
                                            </div>
                                            <div class="float-right text-md font-medium" style="margin-top: -4px;">1/1
                                            </div>
                                            <div class="opacity-30 float-right" style="width: 20px;">
                                                <svg viewBox="0 0 100 100">
                                                    <path transform="scale(1, 1) " fill="#333"
                                                          d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z"></path>
                                                </svg>
                                            </div>
                                        </div> -->
                  </div>
                </div>
                <!--/.Panel 8-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('public/js/typeahead.bundle.js') }}"></script>
<script>
  $(document).ready(function() {
    var type = window.location.hash.substr(1);
    if (type != "") {
      hash(type);
    }
    $(window).on('hashchange', function() {
      var type = window.location.hash.substr(1);
      if (type != "") {
        window.location.reload();
      }
    });

    function hash(type) {
      $("#" + type + "-tab").click();
    }
    var game_mode = '';
    var bloodhound = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.whitespace,
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      remote: {
        url: "{{url('search_friend')}}?query=%query",
        wildcard: '%query'
      },
    });

    $('#search').typeahead({
      hint: true,
      highlight: true,
      minLength: 1
    }, {
      name: 'users',
      source: bloodhound,
      display: function(data) {
        return data.name //Input value to be set when you select a suggestion.
      },
      templates: {
        empty: [
          '<div class="list-group search-results-dropdown"><div class="list-group-item">Epic Id Not Found</div></div>'
        ],
        header: [
          '<div class="list-group search-results-dropdown">'
        ],
        suggestion: function(data) {
          var e = "'" + data.email + "'";
          var epicid = "";
          var disabled = "";

          var epicid = 'Epicid : "' + data.epicid + '"';
          var valorantid = 'Valorantid : "' + data.valorantid + '"';

          return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.name + '<br>' + epicid + '<br>' + valorantid + '<button type="button" class="btn btn-success btn-sm waves-effect waves-light" style="float:right;margin-top:0px;" id="' + data.email + '" ' + disabled + ' onclick="send_request(' + e + ')">Send Request</button></div></div>';
        }
      }
    });
  });

  function send_request(id) {

    var createTeam = 'createTeam';
    var id = id;

    $.ajax({
      type: 'post',
      data: {
        'epicid': id,
        'createTeam': createTeam
      },
      url: "{{ route('send_request') }}",
      success: function(data) {

        if (data != "false") {
          // toastr.info(data);
          $("#success_text").html(data);
          $('#successModal').modal('show');
        }
      }
    });
  }
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": false,
      "autoWidth": false,
      "sortable": false,
      "filter": false,
      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
      ]
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('select option')
      .filter(function() {
        return !this.value || $.trim(this.value).length == 0;
      })
      .remove();

    $('select option')
      .first()
      .prop('selected', true);

    get_profile_id();
    get_user_gameinfo();

    $.ajax({
      url: "{{ route('getfriendrequest') }}",
      type: "get",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        //alert(data);

        var loginemail = '<?php echo Auth::user()->email ?>';
        var count = "0";
        data.forEach(function(object) {

          var epicid = object['epicid'];
          if (object['pimage'] == "" || object['pimage'] == null) {
            pimage = "{{url('public/assets/images/1 (15).png')}}";
          } else {
            var pimage = "{{url('public/assets/images/')}}/" + object['pimage'];

          }
          var e = "'" + object['email'] + "', '" + loginemail + "'";

          $('#friend_lists_confirm').append('<div class="flex flex-row" id="' + loginemail + '" style="width:100%"><div class="game-image"> <img src="' + pimage + '" class="img-fluid"></div><div class="flex flex-col " style="margin-left:20px"><div class="flex flex-row leading-relaxed "><ul class="list-inline" style="margin: 0"><li class="list-inline-item" style="font-size: 20px;font-weight: 600;opacity: 0.5;color: black;">' + object['name'] + '</li><li class="list-inline-item" style="font-size: 15px;font-weight: 600;">Invited by ' + object['email'] + '</li></ul></div><div class="leading-relaxed text-sm ">' + epicid + '</div></div><div class="invites-right"><div class="invites-btn"> <button type="button" class="btn" style=" background: #4daaf2 !important;" onclick="friendacceptCheck(' + e + ');">Accepts </button> <button type="button" class="btn" style=" background: black !important;" onclick="denyCheck();">Deny </button></div></div></div>');
        });
      },
    });
    //get game request player

    $.ajax({
      type: 'post',
      data: {
        'receiver_id': '<?php echo Auth::user()->email ?>'
      },
      url: "{{ route('get_request') }}",
      success: function(data) {
          
          data = JSON.parse(data);
        console.log(data);
        if (data == "false") {} else {
          if (data) {

           // var object = jQuery.parseJSON(data);
              data.forEach(function(object) {

                    var em = "'" + object['gamer_slug'] + "', '" + object['game_key'] + "', '" + object['sender_id'] + "', '" + object['receiver_id'] + "', '" + object['gameid'] + "', '" + object['gameteam'] + "'";
                     var e = "'" + object['gamer_slug'] + "', '" + object['sender_id'] + "'";
            $('#game_list_req').append('<div class="flex flex-row" id="' + object['gamer_slug'] + '" style="width:100%"><div class="flex flex-col " style="margin-left:20px"><div class="flex flex-row leading-relaxed "><ul class="list-inline" style="margin: 0"><li class="list-inline-item" style="font-size: 20px;font-weight: 600;opacity: 0.5;color: black;">' + object['receiver_id'] + '</li><li class="list-inline-item" style="font-size: 15px;font-weight: 600;">Invited by ' + object['sender_id'] + '</li></ul></div></div><div class="invites-right"><div class="invites-btn" style="border:1px solid white;"> <button type="button" class="btn" style=" background: #4daaf2 !important;" onclick="accept1(' + em + ');">Accepts </button><button type="button" class="btn"  onclick="decline1(' + e + ');"style=" background: black !important;" >Deny </button></div></div></div>');

         });
  }
        }
      }
    });

  
             
          
            

    //         $('#decline1').click(function() {
    //           cansel_request("false");
    //         });
             
         


    // function cansel_request($redirect) {
    //   $.ajax({
    //     type: 'post',
    //     data: {
    //       'receiver_id': '<?php echo Auth::user()->email ?>'
    //     },
    //     url: "{{ route('cansel_request') }}",
    //     success: function(data) {
    //       if (data == "true") {
    //         $("#error_text").html('Request has been cancelled...');
    //         $('#errorModal').modal('show');
    //         setTimeout(function() {
    //           location.reload();
    //         }, 2000);
    //         if ($redirect != "false") {

    //         }
    //       }
    //     }
    //   });
    // }



    // get server names
    $.ajax({
      url: "{{ route('get_servers') }}",
      type: "GET",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {

        data.forEach(function(object) {
          $('#server1').append('<option value="' + object['server_name'] + '">' + object['server_name'] + '</option>');
        });
      },
    });

    $.ajax({
      url: "{{ route('getprofilefriend') }}",
      type: "GET",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        var count = "0";

        data.forEach(function(object) {
          var epicid = object['epicid'];
          var valorantid = object['valorantid'];
          var pimage = "{{url('public/assets/images/')}}/" + object['pimage'];
          if (object['epicid'] == "" || object['epicid'] == null) {
            var epicid = "";
          }
          if (object['valorantid'] == "" || object['valorantid'] == null) {
            var valorantid = "";
          }
          if (object['pimage'] == "" || object['pimage'] == null) {
            pimage = "{{url('public/assets/images/1 (15).png')}}";
          }
          // $('#friend_lists').append('<div class="col-md-6 col-xl-6"><div class="card_firend"><div class="card-bodycard_firend"><div class="media align-items-center"><div class="media-body overflow-hidden"><span style="background-image: url('+pimage+')" class="avatar avatar-xl mr-3"></span><h5 class="card-text mb-0">'+object['name']+'</h5><p class="card-text text-muted">'+object['email']+'</p><p class="card-text">Epicid: '+epicid+'<br>Valorantid: '+valorantid+'</p></div></div></div></div></div>');
          $('#friend_lists').append('<div class="flex flex-row" style="width: 50%;"><div class="game-image"><img src="' + pimage + '" class="img-fluid"></div><div class="flex flex-col " style="margin-left:20px"><div class="flex flex-row leading-relaxed "><ul class="list-inline" style="margin: 0"><li class="list-inline-item" style="font-size: 20px;font-weight: 600;opacity: 0.5;color: black;"> ' + object['name'] + '</li><li class="list-inline-item" style="font-size: 15px;font-weight: 600;">' + object['email'] + '</li></ul></div><div class="leading-relaxed text-sm ">Epicid: ' + epicid + '<br>Valorantid: ' + valorantid + '</div></div></div>');
          count = 1;
        });
        $('#team_count').html(count);
      },
    });




    // update Profile epicid/valorantid
    $("#profile-form").validate({
      // rules:{
      //   epicid:{
      //     // remote:"{{ url('checkMail')}}"
      //   },
      //   valorantid:{
      //     // remote:"{{ url('checkMail')}}"
      //   },
      // },
      // messages:{
      //   epicid: {
      //     required: "Name is required"
      //   },
      //   valorantid: {
      //     required: "Password is required"
      //   },
      // },
      submitHandler: function(form) {
        var formurl = $(form).attr('action');
        $.ajax({
          url: formurl,
          type: "POST",
          data: new FormData(form),
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {
            if (data == "false") {
              //toastr.info('Something Went Wrong');
              $("#error_text").html('Something Wrong...');
              $('#errorModal').modal('show');
            } else {

              $("#success_text").html(data);
              $('#successModal').modal('show');
              get_profile_id();
            }
          },
        });
      }
    });

  });

  function friendacceptCheck(sender, receiver) {
    var emailDelete = '<?php echo Auth::user()->email ?>';
    $.ajax({
      url: "{{ route('addfriendconfirm') }}",
      type: "POST",
      data: {
        gamer_name: receiver,
        friend_name: sender
      },
      success: function(data) {
        var x = document.getElementById(emailDelete);
        x.remove(x.selectedIndex);
        //  toastr.info('Request Accepted..');
        $("#success_text").html('Request Accepted..');
        $('#successModal').modal('show');

      },
    });
  }

  function denyCheck() {
    var emailDelete = '<?php echo Auth::user()->email ?>';
    $.ajax({
      type: 'post',
      data: {
        'receiver_id': '<?php echo Auth::user()->email ?>'
      },
      url: "{{ route('friend_cansel_request') }}",
      success: function(data) {
        //alert(emailDelete);
        var x = document.getElementById(emailDelete);
        x.remove(x.selectedIndex);
        $("#error_text").html('Request Denied...');
        $('#errorModal').modal('show');

      }
    });
  }


  function get_profile_id() {
    $.ajax({
      url: "{{ route('get_profile_id') }}",
      type: "GET",
      // data: new FormData(form),
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        var obj = JSON.parse(data);

        $("#epicid").val(obj['epicid']);

        if (obj['email_verified_at'] == null || obj['email_verified_at'] == 'undefined') {
          $("#lw-email-text").html("Please Verify Email Id");
          $("#lw-email-icon").css("color", "red");
        } else {
          $("#lw-email-text").html("");
          $("#lw-email-icon").css("color", "green");
        }

        if (obj['epicid'] != "" || obj['epicid'] != null) {
          if (obj['epic_profile_id'] == "" || obj['epic_profile_id'] == null) {
            $("#lw-tracker-text").html("Please Add LW Tracker As Friend");
            $("#lw-tracker-icon").css("color", "red");
          } else {
            $("#lw-tracker-text").html("");
            $("#lw-tracker-icon").css("color", "green");
          }
          $(".epicid").html(obj['epicid']);
        } else {

        }

        if (obj['valorantid'] != "" || obj['valorantid'] != null) {
          $(".valorantid").html(obj['valorantid']);
        } else {
          $(".valorantid").html('N/A');
        }

        $("#valorantid").val(obj['valorantid']);

        $("#server1 option[value=" + obj['server'] + "]").prop("selected", true);

        //  $hide=false;
        //  if(obj['epicid']=="" || obj['epicid']==null){
        //    $hide=true;
        //  }
        //  else{
        //    if(obj['epic_profile_id']!="" || obj['epic_profile_id']!=null){
        //      $hide=true;
        //    }
        //    else{
        //      $hide=false;
        //    }
        //  }

        //  if($hide=true){
        //    $('#verify_profile').hide();
        //  }
        //  else{
        //   $('#verify_profile').show();
        // }

        // if((obj['epic_profile_id']!="" || obj['epic_profile_id']!=null) || (obj['epicid']=="" || obj['epicid']==null)){
        //   $('#verify_profile').hide();
        // }
        // else{
        //   $('#verify_profile').show();
        // }
      },
    });
  }

  function get_user_gameinfo() {
    $.ajax({
      url: "{{ route('get_user_gameinfo') }}",
      type: "GET",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        $("#game_info").html('' + data['win'] + '/<span>' + data['loss'] + '</span>');
      },
    });


    $.ajax({
      url: "{{ route('get_user_gamedata') }}",
      type: "post",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        // var obj = JSON.parse(data);


      },
    });
  }


  function check_user_is_contetntCreator() {
    $.ajax({
      url: "{{route('checkcontentcreators_assign')}}",
      type: "get",
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        if (data == "false") {} else {
          $(".contentcreator").show();
          $("#share_link").val(data['uniqkey']);

        }
      },
    });
  }


  function get_transaction_data() {
    $('#trandata').DataTable({
      processing: true,

      language: {
        processing: '<span>Processing</span>',
      },
      // serverSide: true,
      //serverMethod: 'post',
      ajax: "{{ route('read_transactiondata') }}",

      paging: true,
      ordering: false,
      autoWidth: false,
      sortable: false,
      filter: false,
      info: false,
      dom: 'Blfrtip',
      columns: [{
          data: "mode"
        },
        {
          data: "amount"
        },
        {
          data: "date"
        }
      ],
    });
  }


  $(document).ready(function() {

    check_user_is_contetntCreator();
    get_transaction_data();

    // $('#transaction_data').DataTable({
    //     "processing": true,
    //     "scrollY":"250px",
    //      "scrollCollapse": true,
    //      // "dataSrc": "",
    //     // "serverSide": true,
    //     "ajax":{
    //       "url": "{{ route('get_user_gamedata') }}" ,
    //      "dataType": "json",
    //      "type": "POST",
    //       },
    //      "columns": [
    //           { "data": "gamemode" },
    //           { "data": "vs" },
    //           { "data": "amount" },
    //           { "data": "prize" },
    //           { "data": "score" },
    //           { "data": "result" }
    //        ],
    //     "dom": 'Bfrtip',
    //      "buttons": [
    //          // 'copyHtml5',
    //          // 'excelHtml5',
    //          // 'csvHtml5',
    //          // 'pdfHtml5'
    //      ],
    // });

  });
</script>
<!-- <script>
    $(".withdraw").click(function (e) {
        e.preventDefault();
        var withdrawCredits = $("#withdrawCredits").val();
        var account = $("#account").val();
          alert('alert');
          return false;
        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'amounts=' + withdrawCredits + '&accounts=' + account;
        if (withdrawCredits == '' || account == '') {
            alert("Please Fill All Fields");
        } else {
            // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "",
                data: dataString,
                success: function (result) {


                }
            });
        }
        return false;
    });
    </script> -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#depositbtn').prop('disabled', true);
    $('#withdraw-form-submit').prop('disabled', true);
    $("#withdraw-form").validate({
      rules: {
        wamount: {
          required: true,
          remote: "{{ url('check_withdraw_info')}}"
        },
        wpaypalemail: {
          required: true,
        },
      },
      messages: {
        wamount: {
          required: "Amount is required",
          remote: "You Can't Withdraw Because You are in On Going Game Or Your One Of Game is Dispute"
        },
        wpaypalemail: {
          required: "Paypal Email is required",
        }
      },
      submitHandler: function(form) {
        $('#waite').show();
        document.getElementById("withdraw-form-submit").disabled = true;
        $('#withdraw_txt').hide();
        $('#withdraw-form-submit1').hide();

        var formurl = $(form).attr('action');
        $.ajax({
          url: formurl,
          type: "POST",
          data: new FormData(form),
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {

            if (data == 'PENDINGtrue') {
              $('#waite').hide();
              $('#withdraw_txt').show();
              $('#withdraw-form-submit1').show();
              document.getElementById("withdraw-form-submit").disabled = false;
              // toastr.info('Password is Changed..');
              $("#success_text").html('Balance Withdraw Successfully...');
              $('#successModal').modal('show');
              $('#okeybtn').click(function() {
                location.reload();

              })

            } else {
              $("#error_text").html(data);
              $('#errorModal').modal('show');
            }

            // return false;
          },

        });
      }
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    get_profile_id();

    $('#password_validate').validate({
      rules: {
        current: {
          required: true
        },
        password_update: {
          required: true
        },
        confirmPassword: {
          required: true,
          equalTo: "#password_update"
        }
      },
      submitHandler: function(form) {
        var formurl = $(form).attr('action');
        $.ajax({
          url: formurl,
          type: "POST",
          data: new FormData(form),
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {
            if (data == 'true') {
              // toastr.info('Password is Changed..');
              $("#success_text").html('Your Password Is Changed...');
              $('#successModal').modal('show');
              document.getElementById("password_validate").reset();
            } else if (data == 'false') {
              //toastr.warning('Old Password is Wrong..');
              $("#error_text").html('Old Password is Wrong...');
              $('#errorModal').modal('show');
            }
          },
        });
      }
    })
  });
</script>
<script>
  function myWthamt() {
    var withdrawBalance1 = $('#withdrawOther').val();
    var withdrawBalance = withdrawBalance1.replace(/[^0-9\.]/g, '');

    var our_fees = $('#withdrawOther').attr("our_fees");
    var paypalAmt = '$' + withdrawBalance;
    var paypal_fees = ((withdrawBalance * 3.4) / 100).toFixed(2);
    paypal_fees = parseFloat(paypal_fees) + 0.30;

    var total_total = parseFloat(paypal_fees) + parseFloat(our_fees);

    var grand_total = parseFloat(withdrawBalance) - parseFloat(total_total);

    var deposit_total = parseFloat(withdrawBalance) + parseFloat(paypal_fees);
    var defaultValue = $('#amount').val(withdrawBalance);


    if (withdrawBalance === '') {

      $('#ErrorMsg').html('Enter Only Numberic Value ');
      $('#paypalAmt').html('');
      $('#paypalAmtWithdraw').html('');
      $('.deposit_amt').html('');
      $('#our_fees_dataWithdraw').html('');
      $('#our_fees_data').html('');
      $('#paypal_fees_final').html('');
      $('.paypal_fees_final').html('');
      $('#total_total').html('');
      $('#grand_total').html('');
      $('#withdraw-form-submit1').html('');
      $("#wamount").html('');
      $("#paybal").html('');
      $('#withdraw-form-submit').prop('disabled', true);
    } else {

      $('#ErrorMsg').html('');
      $('#withdraw-form-submit').prop('disabled', false);
      $('#paypalAmt').html(paypalAmt);
      $('#paypalAmtWithdraw').html(paypalAmt);
      $('.deposit_amt').html(paypalAmt);
      $('#our_fees_dataWithdraw').html('$' + our_fees);
      $('#our_fees_data').html('$' + our_fees);
      $('#paypal_fees_final').html('$' + paypal_fees);
      $('.paypal_fees_final').html('$' + paypal_fees);
      $('#total_total').html('$' + total_total);
      $('#grand_total').html('$' + grand_total);
      $('#withdraw-form-submit1').html(grand_total);
      $("#wamount").val(grand_total);
      $("#paybal").val(withdrawBalance);

    }


  }

  function amountVal(event) {


    var target = event.target || event.srcElement;
    var paypalAmt = event.target.innerHTML;
    var amt = event.target.innerHTML.replace('$', '');
    //alert($(event).attr('our_fees'));

    var our_fees = $('#' + event.target.id).attr("our_fees");
    var paypal_fees = ((amt * 3.4) / 100).toFixed(2);
    paypal_fees = parseFloat(paypal_fees) + 0.30;

    var total_total = parseFloat(paypal_fees) + parseFloat(our_fees);

    var grand_total = parseFloat(amt) - parseFloat(total_total);

    var deposit_total = parseFloat(amt) + parseFloat(paypal_fees);



    // var title =  $(html).attr('title');
    var defaultValue = $('#amount').val(amt);


    if (defaultValue != '') {
      $('#withdrawOther').val('');
      $('#depositbtn').prop('disabled', false);
      $('#withdraw-form-submit').prop('disabled', false);
      $('#paypalAmt').html(paypalAmt);
      $('#paypalAmtWithdraw').html(paypalAmt);
      $('.deposit_amt').html(paypalAmt);
      $('#our_fees_dataWithdraw').html('$' + our_fees);
      $('#our_fees_data').html('$' + our_fees);
      $('#paypal_fees_final').html('$' + paypal_fees);
      $('.paypal_fees_final').html('$' + paypal_fees);
      $('#total_total').html('$' + total_total);
      $('#grand_total').html('$' + grand_total);
      $('#withdraw-form-submit1').html(grand_total);
      $("#wamount").val(grand_total);
      $("#paybal").val(amt);
      $('.deposit_paypal').html('$' + deposit_total);


    } else {
      $('#depositbtn').prop('disabled', true);
      $('#withdraw-form-submit').prop('disabled', true);

    }
  }

  $('#depositbtn').click(function() {
    var amount = $('#amount').val();
    var user_name = "<?php echo auth()->user()->email ?>";
    var mode = 'Deposit';

    $.ajax({
      url: '{{ route("paypal_history") }}',
      type: "POST",
      data: {
        amount: amount,
        user_name: user_name,
        mode: mode
      },
      success: function(data) {

      }
    });
  });

  $('#withdraw-form-submit').click(function() {
    var amount = $('#amount').val();
    var user_name = "<?php echo auth()->user()->email ?>";
    var mode = 'Withdraw';

    $.ajax({
      url: '{{ route("paypal_history") }}',
      type: "POST",
      data: {
        amount: amount,
        user_name: user_name,
        mode: mode
      },
      success: function(data) {

      }
    });
  });


  // function get_profile_id(){
  //   $.ajax({
  //     url: "{{ route('get_profile_id') }}" ,
  //     type: "GET",
  //         // data: new FormData(form),
  //         cache: false,
  //         processData: false,
  //         contentType: false,
  //         success: function(data) {
  //           var obj = JSON.parse(data);

  //           $("#epicid").val(obj['epicid']);

  //           // if(obj['epicid']!="" || obj['epicid']!=null){
  //           //   if(obj['epic_profile_id']=="" || obj['epic_profile_id']==null){
  //           //     $("#lw-tracker-text").html("Please Add LW Tracker As Friend");
  //           //      $("#lw-tracker-icon").css("color", "red");
  //           //   }
  //           //   else{
  //           //       $("#lw-tracker-text").html("");
  //           //       $("#lw-tracker-icon").css("color", "green");
  //           //   }
  //           // }

  //           // $("#valorantid").val(obj['valorantid']);
  //           // $("#server1 option[value="+obj['server']+"]").prop("selected", true);
  //           },
  //         });
  // }
 
    function accept1(gamer_slug,game_key,sender_id,receiver_id,gameid,gameteam) {
              var uid = game_key;
              var gamer_slug = gamer_slug;
             
              var check_info = "0";
              $('#gamer_slug').val(gamer_slug);
              $('#uid').val(uid);
              $.ajax({
                url: "{{ route('check_info') }}",
                type: "POST",
                data: {
                  gamer_slug: gamer_slug
                },
                success: function(data) {

                  if (data == "1") {
                    $.ajax({
                      url: "{{ route('addfriend') }}",
                      type: "POST",
                      data: {
                        gamer_name: sender_id,
                        friend_name: receiver_id,
                        game_slug: gamer_slug
                      },
                      success: function(data) {
                        $("#success_text").html('Request Accepted..');

                        $('#successModal').modal('show');

                        var team1 = 'team1';

                        window.location.href = "{{ route('confirm')}}/" + gameid + "/" + gameteam + "";
                      },
                    });


                  } else {
                    $("#error_text").html(data);
                    $('#errorModal').modal('show');                   
                  }
                },
              });
               }



   function decline1(gamekey,senderid) {

    var emailDelete = '<?php echo Auth::user()->email ?>';
    $.ajax({
      type: 'post',
      data: {
        'receiver_id': '<?php echo Auth::user()->email ?>','gamekey':gamekey,'senderid':senderid
      },
      url: "{{ route('cansel_request') }}",
      success: function(data) {
        //alert(emailDelete);
        var x = document.getElementById(gamekey);
        x.remove(x.selectedIndex);
        $("#error_text").html('Request Denied...');
        $('#errorModal').modal('show');

      }
    });
  }           
</script>
@endsection