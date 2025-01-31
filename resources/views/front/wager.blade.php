@extends('layouts.frontLayout.front_design')
@section('title','Wager')
@section('content')
<style>
  .radioBtnClass {
    margin-left: 15px;
  }

  input[type="text"] {
    border: 1px solid !important;
    border-color: #000 !important;
  }

  input[type="email"].form-control::-webkit-input-placeholder {
    color: orange !important;
    font-size: 18px !important;
  }


  .playsetp .card-header1 {
    text-align: center;
  }

  .playsetp button {
    text-decoration: none !important;
    border: 1px solid #4daaf2;
    font-size: 18px;
    padding: 10px 15px;
  }

  .playsetp .fa {
    margin-left: 10px;
  }

  .playsetp .stay {
    box-shadow: 6px 6px 6px #4daaf2;
    background: #fff;
    color: #000;
    margin-top: 10px;
  }

  .select-hidden {
    display: block !important;
  }

  .twitter-typeahead,
  .tt-hint,
  .tt-input,
  .tt-menu {
    width: 100% ! important;
    font-weight: normal;

  }
  .list-group-item {
    height: 170px;
    text-align: justify;
  }
    .modal{
    overflow:hidden;
    }
    .modal-body{
    overflow:auto;
    }
</style>
<?php $get_slug = request()->segment(count(request()->segments())); ?>
<section class="wagers">
  <div class="container" id="wagers-container">
    <h2 class="text-smaller mb-2">Place Wager</h2>
    <!-- desktop wager form -->
    <form class="place-wager-form place_wager" action="{{ route('place_wager') }}" id="place-wager-form" name="place-wager-form" method="POST">
      <input type="hidden" id="pub" value="0" />
      <div class="row">
        <div class="col col-12 col-md-3">
          <!-- <div class="place-wager-form__header">Game Mode</div> -->
          <select class="form-control search-slt gamemode" id="gamemode" name="gamemode">
            <!-- <option class="mobile-option-header" value="">Game Mode</option> -->
            <?php if ($get_slug == "valorant") {
              $place_wager_btn = "custom-button"; ?>
              <option value="Valorant">Valorant</option>
            <?php } else {
              $place_wager_btn = ""; ?>
              <option value="FortniteBoxfight">Fortnite Boxfight</option>
              <option value="FortniteBuildfight">Fortnite Buildfight</option>
            <?php } ?>
          </select>
          <label data-error="wrong" data-success="right" for="gamemode"></label>
        </div>
        <div class="col col-12 col-md-3">
          <!-- <div class="place-wager-form__header">Amount</div> -->
          <select class="form-control search-slt amount" id="amount" name="amount">
            <option class="mobile-option-header" value="">Amount</option>
          </select>
          <label data-error="wrong" data-success="right" for="amount"></label>
        </div>
        <!-- <div class="col col-12 col-md-2">
                        <select class="form-control search-slt server1" id="server1" name="server1">
                           <option class="mobile-option-header" value="">Server</option>
                           <option value="EU">EU</option>
                           <option value="NAE">NAE</option>
                           <option value="NAW">NAW</option>
                           <option value="OCE">OCE</option>
                        </select>
                        <label data-error="wrong" data-success="right" for="server1"></label>
                     </div> -->
        <div class="col col-12 col-md-2">
          <!-- <div class="place-wager-form__header">Platform</div> -->
          <select class="form-control search-slt console" id="console" name="console">
            <option class="mobile-option-header" value="">Platform</option>
          </select>
          <label data-error="wrong" data-success="right" for="console"></label>
        </div>
        <div class="col col-12 col-md-2">
          <!-- <div class="place-wager-form__header">Platform</div> -->
          <select class="form-control search-slt team" id="team" name="team">
            <option value="">Team</option>
            <option value="1v1">1V1</option>
            <?php if ($get_slug != "valorant") { ?>
              <option value="2v2">2V2</option>
            <?php } ?>
          </select>
          <label data-error="wrong" data-success="right" for="team"></label>
        </div>
        <div class="col col-12 col-md-2">

          <div class="col col-6 col-md-12">
            @guest
            <input type="button" value="Place Wager" data-toggle="modal" data-target="#modalLRForm" class="button button--main text-center" onclick="register_modal('login_modal')" style="background: red;    border-color: red;">
            @endguest
            @auth
            <input id="form_submit" type="submit" value="Place Wager" class="button button--main <?php echo $place_wager_btn; ?>" name="submit" id="submit">
            @endauth

          </div>
        </div>

      </div>
    </form>
  </div>

</section>


<section class="wagers-list">
  <div class="container">
    <div class="row" id="wager_data_list">
    </div>
  </div>
</section>

<section id="how-it-works">
  <style type="text/css">
    .main-timeline .timeline-content {
      width: 100%;
    }
  </style>
  <h2 class="text-center">How To <span class="c-brand-light">Play</span></h2>
  <div class="container custom-width">
    <div class="row">
      <div class="col">
        <div class="main-timeline">
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.2s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInLeft;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_join (2).png') }}" width="100px" height="100px"> -->
              </span>
              <div class="content">
                <h3 class="title">PLACE OR JOIN</h3>
                <p class="description">
                  Place or join a Wager and make sure you have deposited money into your account.

                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.3s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_opponent (2).png') }}" width="100px" height="100px"> -->
              </span>

              <div class="content">
                <h3 class="title">LW TRACKER</h3>
                <p class="description">
                  Make sure you are in the lobby and add your opponent(s) and add LW TRACKER (Every wager).
                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInLeft;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_play (2).png') }}" width="100px" height="100px"> -->
              </span>

              <div class="content">
                <h3 class="title">CONFIRM</h3>
                <p class="description">
                  Press confirm and wait for your opponent(s) to do the same.
                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_winner (2).png') }}" width="100px" height="100px"> -->
              </span>
              <div class="content">
                <h3 class="title">PLAY</h3>
                <p class="description">
                  Play the game.
                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_winner (2).png') }}" width="100px" height="100px"> -->
              </span>
              <div class="content">
                <h3 class="title">CONFIRM SCORE</h3>
                <p class="description">
                  Confirm you or your opponent(s) won or dispute if you disagree (Please remember if you wrongly dispute 3 times then you will be Banned).
                </p>
              </div>
            </a>
          </div>
          <div class="timeline">
            <a href="#" class="timeline-content wow" style="animation-delay: 0.4s; visibility: visible; animation-duration: 1.5s; animation-name: fadeInRight;">
              <span class="timeline-year">
                <!-- <img class="timeline-image" src="{{ url('public/assets/Game/final_winner (2).png') }}" width="100px" height="100px"> -->
              </span>
              <div class="content">
                <h3 class="title">WITHDRAW</h3>
                <p class="description">
                  Withdraw the earnings into your account!
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- confirm model Start---->
<div id="joinModal" class="modal fade">
  <?php
  function randomPassword()
  {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789+-";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }

  ?>
  <div class="modal-dialog modal-confirm" style="width:490px;">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">

          <img class="" src="{{url('public/assets/images/question11.png')}}" width="65" />
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body" style="border:none;">
        <h5 style="color:#000">Are you want to join Public or Private ..? </h5>
        <p>
          <center style="color:#000;font-size: 18px;">
            <input type="radio" class="radioBtnClass" name="public" id="pbc" checked value="0"> Public
            <input type="radio" class="radioBtnClass" name="public" id="pvt" value="1"> Private
            <span id="privateSectionHide" style="display:none;">

              <p>Your Wager Password:
                <input type="text" class="radioBtnClass" readonly name="gpassword" id="gpassword" value="<?php echo randomPassword(); ?>" /></p>
              <p>Share Passwsord With Friend To Join Game </p>
            </span>



            <span id="publicSectionHide" class="search">

              <div class="dipute-form">
                <!-- <label>Invite Player...!</label> -->
                <form method="post" action="#">
                  <div class="input-group">
                    <input class="form-control typeahead" style="height: auto;" type="text" id="search" name="frndne" autocomplete="off" placeholder="Search by Epic Or Valorant Or Email Id">
                    <input class="button button--main button--square" type="submit" value="Search" style="display:none;">
                  </div>
                </form>
              </div>
            </span>


          </center>
        </p>
      </div>
      <div class="modal-footer justify-content-center">


        <p><button type="button" class="btn btn-danger  btn-sm" id="checkRadio" style="display:none;">Start</button></p>
      </div>
    </div>
  </div>
</div>
<!-- confirm model End---->

<!-- 2V/s2 model Start---->
<!-- <div id="vsModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">

					<i class="material-icons">?</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			 <input type="hidden" name="mode" id="mode" value=""/>
      <input type="hidden" name="uid" id="uid" value=""/>
      <input type="text" name="gamer_slug" id="gamer_slug" value=""/>

				<h5 style="color:red; text-align:center;">Which Team you want to join..? </h5>
      <p>
        <center style="color:red">
        <input type="radio" class="" name="teamvs" id="teamvs1"  value="team1"> Team 1 &nbsp;&nbsp;
        <input type="button" readonly class="btn btn-info  btn-sm" name="team1count" id="team1count" value=""/> &nbsp;&nbsp;
        <input type="radio" class="" name="teamvs" id="teamvs2" value="team2"> Team 2 &nbsp;&nbsp;
        <input type="button" readonly class="btn btn-info  btn-sm" name="team2count" id="team2count" value=""/>
        <p id="pvc">Confirm Password : <input type="text" name="cpass" id="cpass" style="border:1px !important" required/></p>
        <div class="modal-footer justify-content-center">
        <p><button type="button" class="btn btn-danger  btn-sm" id="check_pass">Confirm</button></p>
        <p><button type="button" class="btn btn-danger  btn-sm" id="checkvs" style="display:none;">Okey</button></p>
			</div>
        </center>
        </p>
      </div>
		</div>
	</div>
</div> -->
<!-- 2v/s2 model End---->

<!-- Password model Start---->
<!-- <div id="passwordModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">

					<i class="material-icons">?</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			 <input type="hidden" name="mode" id="mode" value=""/>
      <input type="hidden" name="uid" id="uid" value=""/>
      <input type="hidden" name="gamer_slug" id="gamer_slug" value=""/>

				<h5 style="color:red; text-align:center;">Confirm Password </h5>
      <p>
        <center style="color:red">
        <input type="test" class="form-control" name="con_password" id="con_password"  />
        </center>
      </p>
      </div>
			<div class="modal-footer justify-content-center">
    <p><button type="button" class="btn btn-danger  btn-sm" id="confpassword">Okey</button></p>
			</div>
		</div>
	</div>
</div> -->
<!-- Password model Start---->


<!-- Epic Update model Start---->
<!-- <div id="EpicModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
    <form class="form-control updateuserinfo" action="{{ route('updateuserinfo') }}" id="updateuserinfo" name="updateuserinfo" method="POST" style="border: 0px solid #ced4da;">
      <div class="modal-header flex-column">
        <div class="icon-box">

        <i class='far fa-edit' style='font-size:48px;color:red'></i>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Update Epic ID</h5>
        <p>

        <input type="text" class="form-control" name="epicid" id="epicid" value="" placholder="Enter Epic ID" />
        <span  style="color:red;margin-top: 2px;" id="lw-tracker-text">Please Add LW Tracker As Friend</span>

      </p>
      </div>

      <div class="modal-footer justify-content-center">
        <p><button type="submit" class="btn btn-danger  btn-sm" id="updateprofile">Update Epic Id</button></p>
	      <p><button type="button" onclick="next()" class="btn btn-danger btn-sm" id="next">Next</button></p>
      </div>
      </form>
      </div>

    </div>
</div> -->

<div id="EpicModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">

          <img class="" src="{{url('public/assets/images/update.png')}}" width="65" />
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 style="color:#000; text-align:center;">Update Epic ID </h5>
        <p>
          <form class="form-control updateuserinfo" action="{{ route('updateuserinfo') }}" id="updateuserinfo" name="updateuserinfo" method="POST" style="border: 0px solid #ced4da;">
            <input type="text" class="form-control" name="epicid" id="epicid" value="" placholder="Enter Epic ID" />
            <span style="color:red;margin-top: 2px;" id="lw-tracker-text">Please Add LW Tracker As Friend</span>

        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <p><button type="submit" class="btn btn-danger btn-sm" id="updateprofile">Update Epic Id</button></p>
        <p><button type="button" onclick="nextcheck(this)" class="btn btn-danger btn-sm" id="next">Next</button></p>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- <div id="EpicModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
    <div class="modal-header flex-column">
        <div class="icon-box">

        <img class="" src="{{url('public/assets/images/update.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 style="color:red; text-align:center;">Update Epic ID </h5>
      <p>
        <form class="form-control updateuserinfo" action="{{ route('updateuserinfo') }}" id="updateuserinfo" name="updateuserinfo" method="POST" style="border: 0px solid #ced4da;">
        <input type="text" class="form-control" name="epicid" id="epicid" value="" placholder="Enter Epic ID" />
        <span  style="color:red;margin-top: 2px;" id="lw-tracker-text">Please Add LW Tracker As Friend</span>

      </p>
      </div>
      <div class="modal-footer justify-content-center">
        <p><button type="submit" class="btn btn-danger  btn-sm" id="updateprofile">Update Epic Id</button></p>
	      <p><button type="button" onclick="next()" class="btn btn-danger btn-sm" id="next">Next</button></p>
      </div>
    </form>
    </div>
  </div>
</div>  -->
<!-- Epic Update model Start---->
<!-- Valorant Update model Start---->

<div id="ValorantModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">

          <img class="" src="{{url('public/assets/images/update.png')}}" width="65" />
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 style="color:#000; text-align:center;">Update Valorant ID </h5>
        <p>
          <form class="form-control updateuserinfo" action="{{ route('updateuserinfovalorant') }}" id="updateuserinfovalorant" name="updateuserinfovalorant" method="POST" style="border:none;">
            <input type="text" class="form-control" name="valorantid" id="valorantid" value="" placholder="Enter Valorant ID" />

        </p>
      </div>

      <div class="modal-footer justify-content-center">
        <p><button type="submit" class="btn btn-danger btn-sm" id="updateuserinfovalorantbtn">Update Valorant Id</button></p>
        <p><button type="button" onclick="nextcheck(this)" class="btn btn-danger btn-sm" id="nextvalorant">Next</button></p>
      </div>
      </form>
    </div>
  </div>
</div>




<!-- <div id="ValorantModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
    <div class="modal-header flex-column">
        <div class="icon-box">

        <img class="" src="{{url('public/assets/images/update.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 style="color:red; text-align:center;">Update Valorant ID </h5>
      <p>
        <form class="form-control updateuserinfovalorant" action="{{ route('updateuserinfovalorant') }}" id="updateuserinfovalorant" name="updateuserinfovalorant" method="POST">
        <input type="text" class="form-control" name="valorantid" id="valorantid" value="" placholder="Enter Valorant ID" />
      </p>
      </div>
      <div class="modal-footer justify-content-center">
        <p><button type="submit" class="btn btn-danger btn-sm" id="updateuserinfovalorantbtn">Update Valorant Id</button></p>
        <p><button type="button" onclick="next(this)"  class="btn btn-danger btn-sm" id="nextvalorant">Next</button></p>
      </div>
    </form>
    </div>
  </div>
</div> -->
<!-- Valorant Update model Start---->

<script type="text/javascript">
  // get server names
  $.ajax({
    url: "{{ route('get_platform') }}",
    type: "GET",
    cache: false,
    processData: false,
    contentType: false,
    success: function(data) {

      data.forEach(function(object) {
        $('#console').append('<option value="' + object['platform'] + '">' + object['platform'] + '</option>');
      });
    },
  });

  $.ajax({
    url: "{{ route('get_amount') }}",
    type: "GET",
    cache: false,
    processData: false,
    contentType: false,
    success: function(data) {

      data.forEach(function(object) {
        $('#amount').append('<option value="' + object['amount'] + '">$ ' + object['amount'] + '</option>');

      });
      // greet();
      setTimeout(greet, 1000);
    },
  });


  function greet() {
    $('select').each(function() {
      var $this = $(this),
        numberOfOptions = $(this).children('option').length;

      $this.addClass('select-hidden');
      $this.wrap('<div class="select"></div>');
      $this.after('<div class="select-styled"></div>');

      var $styledSelect = $this.next('div.select-styled');
      $styledSelect.text($this.children('option').eq(0).text());

      var $list = $('<ul />', {
        'class': 'select-options'
      }).insertAfter($styledSelect);

      for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
          text: $this.children('option').eq(i).text(),
          rel: $this.children('option').eq(i).val()
        }).appendTo($list);
      }

      var $listItems = $list.children('li');

      $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function() {
          $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
      });

      $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        // alert($(this).text());
        $sid = $this.attr("id");
        // $sval=$(this).text();
        $sval = $this.val();

        $('#' + $sid + 'option[value="' + $sval + '"]');
        $('.' + $sid + 'option[value="' + $sval + '"]');

        // console.log($sval);
      });

      $(document).click(function() {
        $styledSelect.removeClass('active');

        $list.hide();
      });

    });
  }
</script>
@auth
<script>
  $(document).ready(function() {

    get_profile_id();

    $("#place-wager-form").validate({
      rules: {
        gamemode: {
          required: true
        },
        amount: {
          required: true
        },
        // server1:{
        //     required: true
        // },
        console: {
          required: true
        },
        team: {
          required: true
        }
      },
      messages: {
        gamemode: {
          required: "Please Select Game Mode"
        },
        amount: {
          required: "Please Select Game Amount"
        },
        // server1:{
        //     required: "Please Select Server"
        // },
        console: {
          required: "Please Select Console"
        },
        team: {
          required: "Please Select Team"
        }
      },
      submitHandler: function(form) {

        $.ajax({
          url: "{{ route('get_profile_id') }}",
          type: "GET",
          // data: new FormData(form),
          cache: false,
          processData: false,
          contentType: false,
          success: function(data) {
            var obj = JSON.parse(data);
            var formurl = $(form).attr('action');

            // var get_user_data=get_user_data();
            // console.log(get_user_data);

            // var user_balance = '<?php echo Auth::user()->user_balance ?>';
            // var gamemode = $('#gamemode').val();
            // var epicid = '<?php echo Auth::user()->epicid ?>';
            // var epicprofileid = '<?php echo Auth::user()->epic_profile_id ?>';
            // var valorantid = '<?php echo Auth::user()->valorantid ?>';
            // var server = '<?php echo Auth::user()->server ?>';

            var user_balance = obj['user_balance'];
            var gamemode = $('#gamemode').val();
            var epicid = obj['epicid'];
            var epicprofileid = obj['epic_profile_id'];
            var valorantid = obj['valorantid'];
            var server = obj['server'];
            var email_verify = obj['email_verified_at'];
            // obj['epicid']

            user_balance = parseFloat(user_balance).toFixed(2);
            amt = parseFloat($('#amount').val());
            if (user_balance < amt) {
              // toastr.error('Not Enough Credit');

              $("#error_text").html('Not Enough Credit');
              $('#errorModal').modal('show');
              return;
            }

            if (server == null || server == "") {
              // toastr.error('Select A Server In Profile');
              $("#error_text").html('Select A Server In Profile');
              $('#errorModal').modal('show');
              return;
            }

            if (email_verify == null || email_verify == "") {
              //toastr.error('Email Is Not Verified Please Check Your Email');
              $("#error_text").html('Email Is Not Verified Please Check Your Email');
              $('#errorModal').modal('show');
              return;
            }

            if (gamemode == "Valorant") {

              $("#nextvalorant").removeClass();
              $("#nextvalorant").last().addClass("btn btn-danger btn-sm waves-effect waves-light place-btn-modal");
              $("#nextvalorant").even().removeClass("join-btn-modal");

              if (valorantid == null || valorantid == "") {
                $('#ValorantModal').modal('show');
                // toastr.error('Update Your Valorant Id in Profile');
                return;
              }
            } else {
              $("#next").removeClass();
              $("#next").last().addClass("btn btn-danger btn-sm waves-effect waves-light place-btn-modal");
              $("#next").even().removeClass("join-btn-modal");
              if (epicid == null || epicid == "") {
                $('#EpicModal').modal('show');
                // toastr.error('Update Your Epic Id in Profile');
                return;
              } else {
                if (epicprofileid == null || epicprofileid == "") {
                  $('#EpicModal').modal('show');
                  // toastr.error('Verify Epic Erofile Id in Profile');
                  return;
                }
              }
            }
            var team = $('#team').val();
            if (team == '2v2') {

              $('#joinModal').modal('show');

            } else {
              $.ajax({
                url: formurl,
                type: "POST",
                // data: new FormData(form),
                data: {
                  gamemode: $('#gamemode').val(),
                  amount: $('#amount').val(),
                  //  radioValue:radioValue,
                  console: $('#console').val(),
                  team: $('#team').val()
                },
                success: function(data) {
                  if (data == 'false') {

                    // toastr.error('Something went wrong..');

                    $("#error_text").html('Something went wrong..');
                    $('#errorModal').modal('show');

                  } else {
                    window.location.href = "{{ route('confirm')}}/" + data + "";
                    // toastr.info("Please Wait...");
                    // get_wager();
                  }
                },
              });
            }
          },
        });

        //  alert(radioValue);

      },
    });


  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    var idvar;
    // get_wager();
    get_wager_list();

    $('#amount').change(function() {
      var amounta = $(this).val();
      $.ajax({
        type: 'post',
        url: "{{route('checkedBalance')}}",
        data: {
          'amounta': amounta
        },
        success: function(data) {
          if (data == 'true') {
            // toastr.error('You have not sufficient balance..');
            $("#error_text").html('You have not sufficient balance..');
            $('#errorModal').modal('show');
            $('#form_submit').attr('disabled', true);
          } else {
            $('#form_submit').attr('disabled', false);
          }
        }
      });
    });
  });



  function get_wager() {
    $.ajax({
      url: "{{ route('get_wager') }}",
      type: "GET",
      // data: new FormData(form),
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {


        $("#wager_data_list").html('');

        if (data == 'false') {

        } else {



          var obj = jQuery.parseJSON(data);

          // // for update form
          // $("#form_submit").attr('value', 'Update Wager');
          // $("#console option[value="+obj['console']+"]").prop("selected", true);
          // $("#gamemode option[value="+obj['gamemode']+"]").prop("selected", true);
          // $("#server1 option[value="+obj['server']+"]").prop("selected", true);
          // $("#amount option[value="+obj['amount']+"]").prop("selected", true);
          // $("#team option[value="+obj['vs_type']+"]").prop("selected", true);


          // // for Display data
          // $("#wager_data_list").prepend('<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" id="my_wager"> <div class="card-wager"> <div class="card-wager-title"> '+obj['gamemode']+' </div><div class="container"> <div class="row"> <div class="col-xs-3 col-md-3 col-lg-3"> <div class="card-wager-img"> <img src="{{ url("public/assets/icons/ps4-icon_blue.svg") }}"> </div></div><div class="col-xs-9 col-md-9 col-lg-9"> <div class="card-wager-content"> <ul class=""> <li> <div class="card-wager-subtitle"> Region </div><div class="card-wager-subdata"> '+obj['server']+' </div></li><li> <div class="card-wager-subtitle"> Team Size </div><div class="card-wager-subdata"> '+obj['vs_type']+' </div></li><li> <div class="card-wager-subtitle"> Platform </div><div class="card-wager-subdata"> PC </div></li></ul> <ul class=""> <li> <div class="card-wager-subtitle"> '+obj['console']+' </div><div class="card-wager-subdata"> '+obj['amount']+' $ </div></li><li> <div class="card-wager-subtitle"> Prize </div><div class="card-wager-subdata card-wager-price"> 9$ </div></li></ul> </div></div></div></div><div class="button-wager"><button class="button button--main join-button" href="#" id="delete_wager" style="background: #DC3545 !important;border:none;margin:0px !important" onclick="delete_wager()">Cancel Wager</button>  </div></div></div>');

          idvar = setInterval(function() {
            // check_player_joined(obj['gamer_slug'],obj['id']);
          }, 3000);

        }

        get_wager_list();
      }
    });
  }

  function delete_wager() {
    $.ajax({
      url: "{{ route('delete_wager') }}",
      type: "GET",
      // data: new FormData(form),
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        if (data == 'false') {} else {
          // toastr.info('Wager has been cancelled..');
          $("#error_text").html('Wager has been cancelled..');
          $('#errorModal').modal('show');
          $("#my_wager").remove();
          $('#place-wager-form')[0].reset();
          $("#form_submit").attr('value', 'Place Wager');
          clearInterval(idvar);
        }
      }
    });
  }


  function walletCheck() {
    // toastr.error('You have not sufficient balance..');
    $("#error_text").html('You have not sufficient balance..');
    $('#errorModal').modal('show');
  }

  // $('#submitBal').click(function(){
  //    toastr.error('You have not sufficient balance..');
  // });


  // function check_player_joined(gameid,id){
  //   $.ajax({
  //         url: "{{ route('check_player_joined') }}" ,
  //         type: 'post',
  //         data:{'gameid':gameid},
  //         success: function(data) {
  //           // alert(data);
  //           if(data=="true"){
  //             window.location.href = "{{ route('confirm')}}/"+id+"";
  //           }
  //           // if(data=="Full"){
  //           //    toastr.info('Lobby is Full');
  //           // }
  //         }
  //     });
  // }

  setInterval(function() {
    get_wager_list();
    get_profile_id();
    // get_wager();
  }, 8000);
</script>

@endauth
<script>
  @guest
  $(document).ready(function() {
    get_wager_list();
  });

  setInterval(function() {
    get_wager_list();
  }, 8000);
  @endguest



  function get_wager_list() {
    $.ajax({
      url: "{{ route('get_wager_list',$get_slug) }}",
      type: "GET",
      // data: new FormData(form),
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {

        $("#wager_data_list").html('');

        if (data == 'false') {

        } else {
          var db_address = '<?php echo @Auth::user()->user_balance ?>';
          var obj = jQuery.parseJSON(data);
          <?php if (@Auth::user()->user_balance != '') {
            @$amtt = @Auth::user()->user_balance;
          } else {
            @$amtt = "0";
          } ?>
          obj.forEach(function(object) {

            var class_add = object['gamemode'] + object['id'];

            var mode = "'" + object['gamemode'] + "'";
            var id = "'" + object['id'] + "'";
            var vs_type = "'" + object['vs_type'] + "'";
            var gamer_slug = "'" + object['gamer_slug'] + "'";
            var pub_pri = '' + object['public'] + '';
            var wamount = '' + object['amount'] + '';
            if (pub_pri == 0) {
              $('#pvc').hide();
            } else {
              $('#pvc').show();
            }

            $("#wager_data_list").append('<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"> <div class="card-wager"> <div class="card-wager-title"> ' + object['gamemode'] + ' </div><div class="container"> <div class="row"> <div class="col-xs-3 col-md-3 col-lg-3"> <div class="card-wager-img"> <img src="{{ url("public/assets/icons/ps4-icon_blue.svg") }}"> </div></div><div class="col-xs-9 col-md-9 col-lg-9"> <div class="card-wager-content"> <ul class=""> <li> <div class="card-wager-subtitle"> Region </div><div class="card-wager-subdata"> ' + object['server'] + ' </div></li><li> <div class="card-wager-subtitle"> Team Size </div><div class="card-wager-subdata"> ' + object['vs_type'] + ' </div></li><li> <div class="card-wager-subtitle"> Platform </div><div class="card-wager-subdata"> ' + object['console'] + ' </div></li></ul> <ul class=""> <li> <div class="card-wager-subtitle"> Fees </div><div class="card-wager-subdata"> ' + object['amount'] + ' $ </div></li><li> <div class="card-wager-subtitle"> Prize </div><div class="card-wager-subdata card-wager-prize"> ' + object['prize'] + '  </div></li></ul> </div></div></div></div>' + (parseFloat(object['amount']).toFixed(2) <= <?php echo @$amtt; ?> ? '<a id="' + class_add + '" onclick="check_information(' + mode + ',' + id + ',' + vs_type + ',' + gamer_slug + ',' + wamount + ')" href="javascript:void(0)"><div class="button-wager"><button class="join-button ifelse">Join Now!</button></a>' : '<button class="join-button ifelse"  onclick="walletCheck();">Join Now...!</button>') + ' <?php if (!@Auth::user()->id) { ?><style>.ifelse{display:none;}</style><button class="join-button" data-toggle="modal" data-target="#modalLRForm" style="">Join Now...!</button><?php } ?> </div></div></div>');

            // $("#wager_data_list").append('<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4"> <div class="card-wager"> <div class="card-wager-title"> '+object['gamemode']+' </div><div class="container"> <div class="row"> <div class="col-xs-3 col-md-3 col-lg-3"> <div class="card-wager-img"> <img src="{{ url("public/assets/icons/ps4-icon_blue.svg") }}"> </div></div><div class="col-xs-9 col-md-9 col-lg-9"> <div class="card-wager-content"> <ul class=""> <li> <div class="card-wager-subtitle"> Region </div><div class="card-wager-subdata"> '+object['server']+' </div></li><li> <div class="card-wager-subtitle"> Team Size </div><div class="card-wager-subdata"> '+object['vs_type']+' </div></li><li> <div class="card-wager-subtitle"> Platform </div><div class="card-wager-subdata"> '+object['console']+' </div></li></ul> <ul class=""> <li> <div class="card-wager-subtitle"> Amount </div><div class="card-wager-subdata"> '+object['amount']+' $ </div></li><li> <div class="card-wager-subtitle"> Prize </div><div class="card-wager-subdata card-wager-price"> '+object['prize']+' </div></li></ul> </div></div></div></div>'+   ( object['amount'] < <?php echo @$amtt; ?> ? '<a onclick="check_information('+ mode +','+ id +','+ vs_type +','+ gamer_slug +')" href="javascript:void(0)"><div class="button-wager"><button class="button button--main join-button ifelse">Join Now...!</button></a>'    :   '<button class="button button--main join-button ifelse"  onclick="walletCheck();">Join Now...!</button>') +' <?php if (!@Auth::user()->id) { ?><style>.ifelse{display:none;}</style><button class="button button--main join-button" data-toggle="modal" data-target="#modalLRForm" style="">Join Now...!</button><?php } ?> </div></div></div>');

          });

        }
      }
    });
  }

  @auth

  function check_information(mode, id, vs_type, gamerid, wamt) {
    // {{ route('confirm')}}/'+object['id']+'

    $.ajax({
      url: "{{ route('get_profile_id') }}",
      type: "GET",
      // data: new FormData(form),
      cache: false,
      processData: false,
      contentType: false,
      success: function(data) {
        var obj = JSON.parse(data);
        var user_balance = obj['user_balance'];
        var epicid = obj['epicid'];
        var epicprofileid = obj['epic_profile_id'];
        var valorantid = obj['valorantid'];
        var server = obj['server'];
        var email_verify = obj['email_verified_at'];
        var gamemode = mode;

        user_balance = parseFloat(user_balance).toFixed(2);
        amt = parseFloat($('#amount').val());

        if (user_balance < amt) {
          //toastr.error('Not Enough Credit');
          $("#error_text").html('Not Enough Credit');
          $('#errorModal').modal('show');
          return;
        }

        if (server == null || server == "") {
          $("#error_text").html('Select A Server In Profile');
          $('#errorModal').modal('show');
          //toastr.error('Select A Server In Profile');
          return;
        }

        if (email_verify == null || email_verify == "") {
          //toastr.error('Email Is Not Verified Please Check Your Email');
          $("#error_text").html('Email Is Not Verified Please Check Your Email');
          $('#errorModal').modal('show');
          return;
        }

        if (gamemode == "Valorant") {
          $("#nextvalorant").removeClass();
          $("#nextvalorant").last().addClass("btn btn-danger btn-sm waves-effect waves-light join-btn-modal");
          $("#nextvalorant").last().addClass(mode + id);
          $("#nextvalorant").even().removeClass("place-btn-modal");

          if (valorantid == null || valorantid == "") {
            $('#ValorantModal').modal('show');
            // toastr.error('Update Your Valorant Id in Profile');.
            return;
          }
        } else {

          $("#next").removeClass();
          $("#next").last().addClass("btn btn-danger btn-sm waves-effect waves-light join-btn-modal");
          $("#next").last().addClass(mode + id);
          $("#next").even().removeClass("place-btn-modal");

          if (epicid == null || epicid == "") {

            $('#EpicModal').modal('show');
            // toastr.error('Update Your Epic Id in Profile');
            return;
          } else {
            if (epicprofileid == null || epicprofileid == "") {
              $('#EpicModal').modal('show');
              // toastr.error('Verify Epic Erofile Id in Profile');
              return;
            }
          }
        }
        if (vs_type == '2v2') {

          var gamemode = mode;
          var uid = id;
          var gamer_slug = gamerid;
          var wageramt = wamt;
          // alert(gamer_slug);
          // alert(uid);

          $('#gamer_slug').val(gamer_slug);
          $('#uid').val(uid);
          $('#wageramt').val(wageramt);

          $.ajax({
            url: "{{ route('teamselect') }}",
            type: "POST",
            // data: new FormData(form),
            data: {
              gamer_slug: gamer_slug

            },
            success: function(data) {
              var uid = id;

              var arr = data.split('||');
              var team1count = arr[0];
              var team2count = arr[1];
              $('#team1count').val(team1count);
              $('#team2count').val(team2count);
              if (team1count == 'full') {
                $("#teamvs1").hide();
              }
              if (team2count == 'full') {
                $("#teamvs2").hide();
              }
              $('#vsModal').modal('show');
            },
          });

        } else {
          window.location.href = "{{ route('confirm')}}/" + id + "";
        }

      }
    });
    // if(vs_type == '2v2'){

    //  var gamemode = mode;
    //  var uid = id;

    //  var gamer_slug = gamer_slug;

    //   $('#gamer_slug').val(gamer_slug);
    //   $('#uid').val(uid);

    //   $.ajax({
    //      url: "{{ route('teamselect') }}",
    //      type: "POST",
    //      // data: new FormData(form),
    //      data: {
    //        gamer_slug:gamer_slug

    //        },
    //      success: function(data) {
    //        var uid = id;

    //        var arr = data.split('||');
    //        var team1count = arr[0];
    //        var team2count = arr[1];
    //        $('#team1count').val(team1count);
    //        $('#team2count').val(team2count);
    //        if(team1count == 'full'){
    //          $("#teamvs1").hide();
    //        }
    //        if(team2count == 'full'){
    //          $("#teamvs2").hide();
    //        }
    //        $('#vsModal').modal('show');
    //      },
    //  });

    // } else {
    //  var gamemode = mode;
    //  var epicid = '<?php echo Auth::user()->epicid ?>';
    //  var epicprofileid = '<?php echo Auth::user()->epic_profile_id ?>';
    //  var valorantid = '<?php echo Auth::user()->valorantid ?>';
    //  var server = '<?php echo Auth::user()->server ?>';
    //  if(gamemode=="Valorant"){
    //    if(valorantid==null || valorantid==""){
    //      toastr.error('Update Your Valorant Id in Profile');
    //      return;
    //    }
    //  }else{
    //    if(epicid==null || epicid==""){
    //      toastr.error('Update Your Epic Id in Profile');
    //      return;
    //    }else{
    //      if(epicprofileid==null || epicprofileid==""){
    //      toastr.error('Verify Epic Erofile Id in Profile');
    //      return;
    //    }
    //    }
    //  }

    //  if(server==null || server==""){
    //    toastr.error('Select A Server In Profile');
    //      return;
    //  }

    //  window.location.href = "{{ route('confirm')}}/"+id+"";
    // }
  }
  @endauth
</script>
<script>
  $(document).ready(function() {
    $("#checkRadio").click(function() {
      var gpassword = $('#gpassword').val();
      if (gpassword) {
        gpassword;
      } else {
        gpassword = '';
      }

      var radioValue = $("input[name='public']:checked").val();
  
      $.ajax({
        url: "{{ route('place_wager') }}",
        type: "POST",
        // data: new FormData(form),
        data: {
          gamemode: $('#gamemode').val(),
          amount: $('#amount').val(),
          radioValue: radioValue,
          console: $('#console').val(),
          team: $('#team').val(),
          gpassword: gpassword
        },
        success: function(data) {
            var arr = data.split('||');
        
          var dataIDuser = arr[0];

          var dataSlug = arr[1];
          var teamData = arr[2];
        
          if (data == 'false') {

            // toastr.error('Something went wrong..');
            $("#error_text").html('Something went wrong..');
            $('#errorModal').modal('show');

          } else {
          var team1 = 'team1';
                window.location.href = "{{ route('confirm')}}/" + dataIDuser + "/" + team1 + "";
          
                        //  window.location.href = "{{ route('confirm')}}/"+data+"";
                        // toastr.info(data);
                                               }
                    },
                });
      });
    });

</script>
@auth
<script>
  $(document).ready(function() {
    //  $("#checkvs").click(function(){
    //       var team = $("input[name='teamvs']:checked").val();
    //       var mode = $("#mode").val();
    //       var id = $("#uid").val();

    //                 var gamemode = mode;
    //                 var epicid = '<?php echo Auth::user()->epicid ?>';
    //                 var epicprofileid = '<?php echo Auth::user()->epic_profile_id ?>';
    //                 var valorantid = '<?php echo Auth::user()->valorantid ?>';
    //                 var server = '<?php echo Auth::user()->server ?>';
    //                 if(gamemode=="Valorant"){
    //                   if(valorantid==null || valorantid==""){
    //                     toastr.error('Update Your Valorant Id in Profile');
    //                     return;
    //                   }
    //                 }else{
    //                   if(epicid==null || epicid==""){
    //                     toastr.error('Update Your Epic Id in Profile');
    //                     return;
    //                   }else{
    //                     if(epicprofileid==null || epicprofileid==""){
    //                     toastr.error('Verify Epic Erofile Id in Profile');
    //                     return;
    //                   }
    //                   }
    //                 }

    //                 if(server==null || server==""){
    //                   toastr.error('Select A Server In Profile');
    //                     return;
    //                 }

    //                 window.location.href = "{{ route('confirm')}}/"+id+"/"+team+"";

    //  });


    // update epic id modal
    $("#updateuserinfo").validate({
      rules: {
        epicid: {
          required: true
        },
      },
      messages: {
        epicid: {
          required: "Epic ID is required"
        },
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
            if (data == "false") {
              // toastr.info('Something Went Wrong');
              $("#error_text").html('Something Went Wrong');
              $('#errorModal').modal('show');
            } else {
              $("#success_text").html('Epic Profile Id Updated');
              $('#successModal').modal('show');
              get_profile_id();
            }
          },
        });
      }
    });

    // update valorant id modal
    $("#updateuserinfovalorant").validate({
      rules: {
        valorantid: {
          required: true
        },
      },
      messages: {
        valorantid: {
          required: "Valorant ID is required"
        },
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
            if (data == "false") {
              // toastr.info('Something Went Wrong');
              $("#error_text").html('Something Went Wrong');
              $('#errorModal').modal('show');
            } else {
              // toastr.info(data);
              $("#success_text").html('Valorant Id Updated');
              $('#successModal').modal('show');
              get_profile_id();
            }
          },
        });
      }
    });

  });
</script>

@endauth

<script>
  $("#pbc").click(function() {
    $('#privateSectionHide').hide();
    $('#publicSectionHide').show();
    $('#checkRadio').hide();
  });

  $("#pvt").click(function() {
    $('#privateSectionHide').show();
    $('#publicSectionHide').hide();
    $('#checkRadio').show();
  });

  // $("#check_pass").click(function(){
  //     var cpass = $('#cpass').val();
  //     var team = $("input[name='teamvs']:checked").val();
  //     var gamer_slug = $('#gamer_slug').val();

  //     $.ajax({
  //                     url: "{{ route('cn_check_password') }}",
  //                     type: "POST",
  //                     // data: new FormData(form),
  //                     data: {
  //                       cpass:cpass,team:team,gamer_slug:gamer_slug

  //                       },
  //                     success: function(data) {
  //                       if(data == 'blank'){
  //                         toastr.error('Select Team First');
  //                          return;
  //                       }
  //                       if(data == 'false'){
  //                         toastr.error('You have enter wrong password');
  //                          return;
  //                       }
  //                       if(data == 'true'){

  //                         $('#check_pass').hide();
  //                         $('#checkvs').show();
  //                         return;
  //                       }
  //                     },
  //                 });

  //  });


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

        if (obj['epic_profile_id'] == "" || obj['epic_profile_id'] == null) {
          $("#next").hide();
          if (obj['epicid'] == "" || obj['epicid'] == null) {
            $("#lw-tracker-text").html("");
          } else {
            $("#lw-tracker-text").html("Please Add LW Tracker As Friend");
          }
        } else {
          $("#lw-tracker-text").html("");
          $("#next").show();
        }


        $("#valorantid").val(obj['valorantid']);
        if (obj['valorantid'] == "" || obj['valorantid'] == null) {
          $('#nextvalorant').hide();
        } else {
          $('#nextvalorant').show();
        }

      },
    });
  }



  function nextcheck(e) {

    var id = e.id;
    if ($('#' + id).hasClass("join-btn-modal")) {
      var lastClass = $('#' + id).attr('class').split(' ').pop();
      alert(lastClass);
      $("#" + lastClass).click();
    }
    if ($('#' + id).hasClass("place-btn-modal")) {
      $("#form_submit").submit();
    }

  }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
<script>
  (function($) {

    $(document).ready(function() {
      setupFade();
      setupClickToScroll();
      setupPostAnimation();
      setupScrollToTop();
      enableScrollAbortion();

      // Trigger window.scroll, this will initiate some of the scripts
      $(window).scroll();
    });


    // Allow user to cancel scroll animation by manually scrolling
    function enableScrollAbortion() {
      var $viewport = $('html, body');
      $viewport.on('scroll mousedown DOMMouseScroll mousewheel keyup', function(e) {
        if (e.which > 0 || e.type === 'mousedown' || e.type === 'mousewheel') {
          $viewport.stop();
        }
      });
    }

    function setupScrollToTop() {
      var scrollSpeed = 750;
      $('.trigger-scroll-to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: 0
        }, scrollSpeed);
      });
    }


    function setupPostAnimation() {
      var posts = $('.post-wrapper .post');
      $(window).on('scroll resize', function() {

        var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window).scrollTop() : $(document).scrollTop(),
          windowHeight = $(window).height(), // Needs to be here because window can resize
          overScroll = Math.ceil(windowHeight * .20),
          treshhold = (currScroll + windowHeight) - overScroll;

        posts.each(function() {

          var post = $(this),
            postScroll = post.offset().top

          if (postScroll > treshhold) {
            post.addClass('hidden');
          } else {
            post.removeClass('hidden');
          }

        });

      });
    }

    function setupFade() {

      var posts = $('.post-wrapper .post').reverse(),
        stemWrapper = $('.stem-wrapper'),
        halfScreen = $(window).height() / 2;

      $(window).on('scroll resize', function() {

        delay(function() {

          var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window).scrollTop() : $(document).scrollTop(),
            scrollSplit = currScroll + halfScreen;

          posts.removeClass('active1').each(function() {

            var post = $(this),
              postOffset = post.offset().top;

            if (scrollSplit > postOffset) {

              // Add active class to fade in
              post.addClass('active1')

              // Get post color
              var color = post.data('stem-color') ? post.data('stem-color') : null,
                allColors = 'color-green color-yellow color-white'

              stemWrapper.removeClass(allColors);

              if (color !== null) {
                stemWrapper.addClass('color-' + color);
              }

              return false;
            }

          });
        }, 20);

      });

    }

    function setupClickToScroll(post) {

      var scrollSpeed = 750;

      $('.post-wrapper .post .stem-overlay .icon').click(function(e) {
        e.preventDefault();

        var icon = $(this),
          post = icon.closest('.post'),
          postTopOffset = post.offset().top,
          postHeight = post.height(),
          halfScreen = $(window).height() / 3,
          scrollTo = postTopOffset - halfScreen + (postHeight / 2);

        $('html, body').animate({
          scrollTop: scrollTo
        }, scrollSpeed);
      });

    }

  })(jQuery);
  /*==========  Helpers  ==========*/
  // Timeout function
  var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
      clearTimeout(timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $.fn.reverse = function() {
    return this.pushStack(this.get().reverse(), arguments);
  };
</script>

<script src="{{ url('public/js/typeahead.bundle.js') }}"></script>
<!-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> -->
<!-- Initialize typeahead.js on the input for search friend -->
<script>
  $(document).ready(function() {

    var game_mode = $('#gamemode').val();

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

          // if(data.epicid==null || data.epicid==""){

          // }
          // if(data.epic_profile_id==null || data.epic_profile_id==""){

          // }

          // if(data.valorantid==null || data.valorantid==""){

          // }

          if (game_mode == "Valorant" && (data.valorantid == null || data.valorantid == "")) {
            disabled = "disabled";
          }

          if (game_mode != "Valorant" && (data.epicid == null || data.epicid == "")) {
            disabled = "disabled";
          }

          if (game_mode != "Valorant" && (data.epic_profile_id == null || data.epic_profile_id == "")) {
            disabled = "disabled";
          }

          if (data.valorantid == null || data.valorantid == "") {
            var valorantid = 'Valorantid : ""';
          }
          if (data.epicid == null || data.epicid == "") {
            var epicid = 'Epicid : ""';
          }

          //disabled="disabled";

          return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item" style="height:170px!important;text-align: justify!important;">' + data.name + '<br>' + data.email + '<br>' + epicid + '<br>' + valorantid + '<br>' +'<center><button type="button" class="btn btn-success btn-sm waves-effect waves-light" style="margin-top:0px;" id="' + data.email + '"  onclick="send_request1(' + e + ')">Send Request</button></center></div></div>';
        }
      }
    });
  });

  function send_request1(id) {

    $.ajax({
      url: "{{ route('place_wager') }}",
      type: "POST",
      // data: new FormData(form),
      data: {
        gamemode: $('#gamemode').val(),
        amount: $('#amount').val(),
        radioValue: 0,
        console: $('#console').val(),
        team: $('#team').val(),

      },
      success: function(data) {
        if (data == 'false') {

          // toastr.error('Something went wrong..');
          $("#error_text").html('Something went wrong..');
          $('#errorModal').modal('show');

        } else {
          var arr = data.split('||');
        
          var dataIDuser = arr[0];

          var dataSlug = arr[1];
          var teamData = arr[2];
          $.ajax({
            type: 'post',
            data: {
              'epicid': id,
              'gamer_key': dataSlug,
              'gamer_sluged': dataSlug,
              'gameamount': $('#amount').val(),
              'gamemode': $('#gamemode').val(),
              'gameteam': teamData,
              'gameid': dataIDuser
            },
            url: "{{ route('send_request') }}",
            success: function(data) {

              if (data != "false") {
                //toastr.info(data);
                $("#success_text").html(data);
                $('#successModal').modal('show');
                $('#checkRadio').show();
                var team1 = 'team1';
                window.location.href = "{{ route('confirm')}}/" + dataIDuser + "/" + team1 + "";
              }
            }
          });

          //  window.location.href = "{{ route('confirm')}}/"+data+"";
          // toastr.info(data);
        }
      },
    });
    // $.ajax({
    //     type: 'post',
    //     data: {
    //         'epicid': id,'gamer_key': gamer_key,'gamer_sluged': gamer_sluged,'gameamount': gameamount,'gamemode': gamemode,
    //     },
    //     url: "{{ route('send_request') }}",
    //     success: function(data) {

    //       if(data!="false"){
    //         //toastr.info(data);
    //         $("#success_text").html(data);
    //         $('#successModal').modal('show');
    //         $('#checkRadio').show();
    //       }
    //     }
    // });
  }
</script>
@endsection