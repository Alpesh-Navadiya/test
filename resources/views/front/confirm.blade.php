@extends('layouts.frontLayout.front_design')
@section('title','Confirm')
@section('content')
<style type="text/css">
      .card-lobby{
      padding: 1rem 1rem 1rem 1rem;
      text-align: center;
      border: 0;
      text-align: center;

     margin-left: auto;
      margin-right: auto;
      transition: all 0.3s;
      position: relative;
      background-clip: border-box;
      border-radius: .25rem;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      }
      .card-lobby:hover {

      /*background-color: #468AF1;*/
      /*border-top: 4px solid rgb(101, 162, 255);*/

      }

      .card1{
        background-color: #21252963;
          color: white;
          border-radius: 20px;
        margin-bottom: 20px;
          font-family: "lato-Regular";
         }
      .card1 ol{
          padding-left: 0;
      }
      .btn-link{
        color: white;
        font-weight: 800;
        margin: 0rem;
      }
      .btn-link:hover{
        color: white;
      }

      h1{
        color: lightseagreen;
        margin: 5px;
      }
      .mycontainer{
          margin-top: 20px;
      }

      .lobby-player-img img {
      /*float: right;*/
      width: 90%;
      background-image: url(./assets/images/player.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      /*transform: scale(1.2);*/
      /*width: 100%;*/
      display: block;
      border-radius: 200px;
      -webkit-border-radius: 200px;
      -moz-border-radius: 200px;
      -ms-border-radius: 200px;
      -o-border-radius: 200px;
      border: 4px solid #4daaf2;
      margin: 0 auto;
      padding: 5px;
      }
      .lobby-player-title{
          font-size: 15px;
      margin-top: 5px;
      margin-bottom: 0px!important;
      }
      .lobby-player-waiting{
          font-size: 15px;
          margin-top: 5px;
          margin-bottom: 0px!important;
      }
      .lobby-vs-img{
      text-align: center;
      justify-content: center;
      }
      .score1{
        margin:15px;
      }
      @media only screen and (max-width: 770px){
        .vs{
        padding-top: 0px !important;
      }
    }
      .vs{
        margin-top: 100px;
      }
      .score{
      background-color:#e4e4ea;
      border:1px solid;
      height: calc(1.5em + .75rem + 7px);
      }
      .confirm-btn{
      float: right;
      }
      .btn-sm{
        color:black;
        font-weight: 900;
      }
      .score-total{font-size: 30px;font-weight: bold;}
      .lobby-first{
        padding: 1rem;
        margin-top: 124px;
      }
      span.usd{
        font-size: 30px;
        font-weight: 600;
      }
      .dispute1{
        display: flex;
        justify-content: center;
      }
      .modal-confirm {
        color: #636363;
        width: 400px;
      }
      .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
      }
      .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
      }
      .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
      }
      .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
      }
      .modal-confirm .modal-body {
        color: #999;
      }
      .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
      }
      .modal-confirm .modal-footer a {
        color: #999;
      }
      .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        
      }
      .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-right: 11px;
      }
      .twitter-typeahead,
            .tt-hint,
            .tt-input,
            .tt-menu{
          width: 100% ! important;
          font-weight: normal;

      }
      .list-group-item{
        color: #111;
        border-bottom: 1px solid skyblue;
      }
      .base-timer {
  position: relative;
  width: 50px;
  height: 0px;
  color:#fff;
  float:right;
}

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 50px;
  height: 50px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
}
</style>
<section class="lobby-first">
<div class="main-panel">
        <div class="container">

          <div class="row justify-content-md-center">
            <div class="col-7">

              <h1>Confirm</h1>
              <p><?php echo @$wager_data->gamemode . ' ' . @$wager_data->vs_type; ?>  <span class="usd">  &nbsp; <?php echo @$wager_data->amount; ?> $</span></p>
            </div>
            <div class="col-5 dispute text-right">
               <!-- <button type="button" class="btn btn-outline-info btn-sm"> <div  id="app"> </div></button>  -->
             <div id="app"></div> 
            </div>
          </div>

          <hr style="border: 1px lightseagreen solid;margin-top:0px!important">

          <div class="row">

            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-5">
                  <div class="card-lobby wow" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                    <div class="lobby-player-img">
                      <?php
if (Auth::user()->pimage!='') {
  $pimage = 'images/' . Auth::user()->pimage;
} else {
  $pimage = 'images/question.png';
}
?>
                      <!-- <img class="" src="{{url('public/assets/'.$pimage)}}" alt=""> -->
                      <?php if(Auth::user()->pimage!='') { ?>
                        <img class="user" src="{{url('public/assets/images/')}}/<?php echo Auth::user()->pimage; ?>" alt="image">
                     <?php } else { ?>
                      <img class="" src="{{url('public/assets/images/question.png')}}" alt="">
                     <?php }?>
                    </div>
                    <h2 class="lobby-player-title own-sqard"></h2>
                    <p><?php echo strtoupper(Auth::user()->name); ?></p>
                    <p class="epic-id" ><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"><span id="own-epicid">
                      <?php
                        if ($wager_data->gamemode == "valorant") {
                          echo Auth::user()->valorantid;
                        } else {
                          echo Auth::user()->epicid;
                        }
                    ?>
                    </span>
                   </p>
                    <!-- <a href="javascript:void(0)" id="own-sqard"></a> -->
                  </div>
                  <div class="card-lobby wow" id="own_member_id" style="display:none;animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                    <div class="lobby-player-img">

                    <img class="" id="own_member_image" src="{{url('public/assets/character/ch2_final.png')}}" alt="">
                    </div>
                    <h2 class="lobby-player-title own-sqard"></h2>
                    <p id="own_member_name"></p>
                    <p class="epic-id" ><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="own_member_epicid">epic ID </span></p>

                    <!-- <a href="javascript:void(0)" id="own-sqard"></a> -->

                  </div>
                </div>
                <div class="col-sm-2" >

                 <div class="col-md-12 confirm-vs" style="justify-content: center;align-items: center;display: flex;">

                  <div class="vs">
                    <img src="{{url('public/assets/character/vs.png')}}" width="60px">
                  </div>
                </div>
              </div>
              <div class="col-sm-5 ">
                   <input type="hidden" id="chat_slug" value="{{ @$wager_data->gamer_slug }}"/>
                  <div class="card-lobby wow" id="opponent_id" gkey="{{ @$wager_data->gamer_slug }}" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                    <div class="lobby-player-img">
                     <img class="user" id="opponent_image" src="{{url('public/assets/images/question.png')}}" alt="">
                     
                    </div>
                    <h2 class="lobby-player-waiting opponent-sqard"></h2>
                    <p id="opponent_name">Waiting for players</h2>
                    <p class="epic-id"><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="opponent_epicid">Epic ID<span> </p>

                  </div>
                  <div class="card-lobby wow oppnent_member_id" style="display:none"  id="opponent_member_id" gkey="{{ @$wager_data->gamer_slug }}" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                    <div class="lobby-player-img">
                      <img class="" id="opponent_member_image" src="{{url('public/assets/images/question.png')}}" alt=""> 
                    
                    </div>
                    <h2 class="lobby-player-waiting opponent-sqard"></h2>
                    <p id="opponent_member_name">Waiting for players</p>
                    <p class="epic-id"><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="opponent_member_epicid">epic ID </span></p>

                    <!-- <h2 class="lobby-player-title">IGN: <span id="opponent_member_name"></span></h2> -->
                    <!-- <a href="javascript:void(0)" id="opponent-sqard"></a> -->
                  </div>
              </div>

            </div>
            <div class="container" >
            <div class="col-md-12 dispute1"  >
              <button type="button" class="btn btn-success btn-sm" style="display: none;" id="confirm" onclick="confirm()">Confirm</button>
              <a href="#cancelModal" class="trigger-btn delete-modal" data-toggle="modal" data-id="{{$wager_data->id}}"> <button type="button" class="btn btn-danger  btn-sm">Cancel</button></a>
              </div>
            </div>
            <div class="container mycontainer" >

              <div class="col-md-12">
              <div id="accordion">
                <div class="card1">
                  <div class="card-header1" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Learn How to Play <i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <ul>
                        <ol>
                          1) Add opponent and bot
                        </ol>
                        <ol>
                          2) Play the game following our rules
                        </ol>
                        <ol>
                          3) confirm that you lost/won
                        </ol>

                      </ul>
                      <p>Get Money Streight to Your Paypal After Winning a Game !!</p>
                    </div>
                  </div>


              </div>
            </div>
          </div>
              </div>

          </div>
            <div class="col-md-4">
              <div class="search">

                  <div class="dipute-form">
                    <!-- <label>Invite Player...!</label> -->
                    <form method="post" action="#"> 
                     <div class="input-group">
                        <input class="form-control typeahead" style="height: auto;" type="text" id="search" name="frndne" autocomplete="off" placeholder="Enter Epic Or Valorant Or Email Id">
                       <input class="button button--main button--square" type="submit" value="Search" style="display:none;"> 
                      </div> 
                     </form>
                </div>

              </div>
              <div class="card-chat card-bordered">
                    <div class="card-header">
                      <h4 class="card-title"><strong><a class="btn btn-xs btn-info" href="#" data-abc="true">Chat </a></strong></h4>
                    </div>

                    

                      <div class="ps-container ps-theme-default ps-active-y message-wrapper" id="chat-content " style="overflow-y: scroll !important; height:200px !important;">

                    <div  id="messages"></div>
                    </div>
          <div class="publisher bt-1 border-light"> 
                      <!-- <input class="publisher-input " type="text" placeholder="Write something">  -->
                      <div class="input-text">
    <input type="text" name="message" class="submit" style="border: 1px solid #333 !important;">
</div>
                      <!-- <span class="publisher-btn file-group"> 
                        <i class="fa fa-paperclip file-browser"></i> 
                        <input type="file"> 
                      </span>  -->
                      <button type="button" class="publisher-btn button button--main button--square sendClick" >Send  </button> 
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- confirm model Start---->

  <div id="cancelModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">

         <img class="" src="{{url('public/assets/images/close.png')}}" width="70" />
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Do you really want to close these game? </h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger" onclick="deleteYes()">YES</button>
      </div>
    </div>
  </div>
</div> 
   <!-- confirm model End---->
   <script type="text/javascript">
$(document).ready(function(){
//check_confirmation();
get_opponent_info();
get_current_game_info();
//cancelGame();
set_timer();
var oppo_info=setInterval(function() { get_opponent_info(); }, 8000, true);

setInterval(function() { cancelGame(); }, 5000, true);
clickFire();

});

// confirm own
function confirm(){
  var game_key = '<?php echo $wager_data->gamer_slug ?>';
  $.ajax({
    type : 'post',
    data:{'game_key':game_key},
    url:"{{ route('confirm_user') }}",
    success: function(data){
      if(data=="false"){

      }
      else{
        check_confirmation();
        setInterval(function(){
          check_confirmation();
        }, 2000);
      }
    }
  });
}

// check all user confirmed
function check_confirmation(){
    var slug = '<?php echo @$wager_data->id ?>';
    var game_key = '<?php echo $wager_data->gamer_slug ?>';
    $.ajax({
      type : 'post',
      data:{'game_key':game_key},
      url:"{{ route('check_confirmation') }}",
      success: function(data){
        if(data=="false"){
          $("#confirm").html("Waiting...");
          $('#confirm').prop('disabled', true);
        }
        if(data=="true"){
            window.location.href = "{{ route('lobby')}}/"+slug+"";
        }
      }
    });
}

// get current game info
function get_current_game_info(){
  var game_key = '<?php echo $wager_data->gamer_slug ?>';
  $.ajax({
    url: "{{ route('get_current_game_info') }}" ,
    type: 'post',
    data:{'game_key':game_key},

    success: function(data) {
      $( data ).each(function( index ) {

        // set squard
        if(data[index]['gamername']== <?php echo '"' . Auth::user()->email . '"'; ?>){
            if(data[index]['sqard']=="Team 1"){

              $('.own-sqard').html('Team 1');
              $('.opponent-sqard').html('Team 2');
            }
            else{
              $('.own-sqard').html('Team 2');
              $('.opponent-sqard').html('Team 1');
            }
        }

      });
    }

  });
}

// get Opponent Info
function get_opponent_info(){
  var vs_type = '<?php echo $wager_data->vs_type ?>';
  var game_key = '<?php echo $wager_data->gamer_slug ?>';
  var game_mode = '<?php echo $wager_data->gamemode ?>';

  if(vs_type=="1v1"){

    $.ajax({
      url: "{{ route('get_opponent_info') }}" ,
      type: 'post',
      data:{'game_key':game_key},
      success: function(data) {
        // data=JSON.parse(data);
        if(data=="false"){
          $("#confirm").hide();
          $('#opponent_id').val();
          $('#opponent_name').html('Waiting For Player');
          $('#opponent_epicid').html('Epic id');
          $("#opponent_image").attr("src","{{ url('public/assets/images/question.png')}}");
        }
        else{

          var oppId = data['id'];
          $("#confirm").show();
          $('#opponent_id').val(oppId);
          $('#opponent_name').html(data['name']);
         // $('.user')[0].click();
        //  alert('once');
          if(game_mode!="valorant"){
            $('#opponent_epicid').html(data['epicid']);
          }
          else{
            $('#opponent_epicid').html(data['valorantid']);
          }

          //if(data['pimage']=="" || data['pimage']==null){
            //$("#opponent_image").attr("src","{{ url('public/assets/'. $pimage)}}");
          //}
          //else{
            var pimage = data['pimage'];
            $("#opponent_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
          //}
        }
      }
    });

  }
  else{
    
    // for oppnent
    $.ajax({
      url: "{{ route('get_2v2_opponent_info') }}" ,
      type: 'post',
      data:{'game_key':game_key},
      success: function(data) {
      console.log(data);
        if(data=="false"){
          $("#confirm").hide();
          $('#opponent_id').val();
          $('#opponent_name').html('Waiting For Player');
          $('#opponent_epicid').html('Epic id');
          $("#opponent_image").attr("src","{{ url('public/assets/images/question.png')}}");
          $("#opponent_member_id").hide();
        }
        else{
          ccount=1;

          data.forEach(function(object) {
            
            if(ccount=="1"){
              var oppId = object['id'];

              $("#oppo_id").hide();
              $('#opponent_id').val(oppId)
              $('#opponent_name').html(object['name']);

              $('#opponent_epicid').html(object['epicid']);
              $('.user')[0].click();
            
              if(data['pimage']=="" || object['pimage']==null){
                $("#opponent_image").attr("src","{{ url('public/assets/images/question.png')}}");
              }
              else{
                var pimage = object['pimage'];
               
                $("#opponent_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
              }
            }
            else{
              // var oppomemb = object['pimage'];
              var oppId = object['id'];
              $("#opponent_member_id").show();
              $('#opponent_member_id').val(oppId)
              $('#opponent_member_name').html(object['name']);
               $('#opponent_member_epicid').html(object['epicid']);

              if(data['pimage']=="" || data['pimage']==null){

                $("#opponent_member_image").attr("src","{{ url('public/assets/images/') }}/" +object['pimage']);
              }
              else{
                var pimage = data['pimage'];
              
                $("#opponent_member_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
              }

            }
            ccount++;
            if(ccount=="3")
            {
              $("#confirm").show();
            }
          });
        }
      }
    });


    // for own team member
    $.ajax({
      url: "{{ route('get_member_info') }}" ,
      type: 'post',
      data:{'game_key':game_key},
      success: function(data) {
        if(data=="false"){
          // $("#confirm").hide();
          $('#own_member_id').hide();
        }
        else{
          var oppId = data['id'];
          $('#own_member_id').show();
          $('#own_member_id').val(oppId);
          $('#own_member_name').html(data['name']);
          $('#own_member_epicid').html(data['epicid']);

          if(data['pimage']=="" || data['pimage']==null){
            $("#own_member_image").attr("src","{{ url('public/assets/images/question.png') }}");
          }
          else{
            var pimage = data['pimage'];
            $("#own_member_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
          }
          // clearInterval(oppo_info);
        }
      }
    });
  }
}

// for cancel a game
function cancelGame(){
  var wagersId = '<?php echo @$wager_data->id ?>';
  var gamer_key = '<?php echo $wager_data->gamer_slug ?>';

    $.ajax({
      type : 'post',

      data: {
        'wagersId':wagersId,'gamer_key': gamer_key,
        },
      url:"{{ route('check_cancelgame') }}",
      success: function(data){
        
         if(data == 'true'){
          window.location.href = "{{ url('wager/fortnite')}}";
          //setInterval('location.reload()', 600);
         }
        }
    });
}

function deleteYes(){
  $('#cancelModal').modal('show');
          var GameUserid = $('.delete-modal').data('id');

            $.ajax({
                type: 'post',
                url: "{{route('gamecancel')}}",
                data:{'GameUserid':GameUserid},
                success: function(data) {

                    if(data == 'true'){
                      // cancelGame();
                      window.location.href = "{{ url('wager/fortnite')}}";
                      $('#cancelModal').modal('hide');
                      //toastr.error('Game has been cancel');

                    }
                }
            });
}
function timer_up(){
         
        
          var game_key = '<?php echo $wager_data->gamer_slug ?>';
          var game_mode = '<?php echo $wager_data->gamemode ?>';
          $.ajax({
              url: "{{ route('terminate_game') }}",
              type: 'post',
              data:{'game_key':game_key},
              success: function(data) {
                if(data=="true"){
                      $("#error_text").html('Game has been cancelled...!');
                      $('#errorModal').modal('show');
                  setTimeout(function(){
                  
                    if(game_mode == 'Valorant'){
                    window.location.href="{{ url('wager/valorant') }}";
                       }
                       else {
                        window.location.href="{{ url('wager/fortnite') }}";
                       }
                   }, 2000);                  
                }
                }
            });
       }

// function set_timer(){
// var game_key = '<//?php echo $wager_data->gamer_slug ?>';
// var minutes_total=4;
// var seconds_total=60;
// $.ajax({
//   url: "{{ route('get_start_timer_confirm') }}",
//   type: 'post',
//   data:{'game_key':game_key},
//   success: function(data) {

//     if(data=="1"){
//       set_timer();
//     }
//     var diff = Math.abs(new Date(data['edate']).getTime() - new Date(data['sdate']).getTime());

//     var minutes = Math.floor(diff / 60000);
    
//     var seconds = ((diff % 60000) / 1000).toFixed(0);

//     if(minutes>=5){
//       timer_up();

//     }
//     // if(minutes) {
//     //   alert('ss');
//     //   time_stop();
//     // }

//     minutes_total=minutes_total-minutes;
//     seconds=60-seconds;
//     seconds_total=seconds;

//     var timer2 = minutes_total+":"+seconds_total;

//     var interval = setInterval(function() {

//       var timer = timer2.split(':');
//       //by parsing integer, I avoid all extra string processing
//       var minutes = parseInt(timer[0], 10);
//       var seconds = parseInt(timer[1], 10);
//       //alert(minutes);
//       if(minutes == 'NaN'){
//         alert(minutes);
//         $('.countdown').hide();
//       }
//       --seconds;
      
//       minutes = (seconds < 0) ? --minutes : minutes;
//       seconds = (seconds < 0) ? 59 : seconds;
//       seconds = (seconds < 10) ? '0' + seconds : seconds;
//       //minutes = (minutes < 10) ?  minutes : minutes;
     
//       $('.countdown').html(minutes + ':' + seconds);
      
//       if (minutes < 0) clearInterval(interval);
//       //check if both minutes and seconds are 0
//       if ((seconds <= 0) && (minutes <= 0)){ clearInterval(interval); timer_up(); }
//       timer2 = minutes + ':' + seconds;
//     }, 1000);

//     }
// });


// }

const FULL_DASH_ARRAY = 283;
        const WARNING_THRESHOLD = 60;
        const ALERT_THRESHOLD = 300;

        const COLOR_CODES = {
        info: {
        color: "green"
        },
        warning: {
        color: "orange",
        threshold: WARNING_THRESHOLD
        },
        alert: {
        color: "red",
        threshold: ALERT_THRESHOLD
        }
        };
        let TIME_LIMIT = 900;
        let timePassed = 0;
        let timeLeft = TIME_LIMIT;
        let timerInterval = null;
        let remainingPathColor = COLOR_CODES.info.color;
       function set_timer(){

        
        
            var game_key = '<?php echo $wager_data->gamer_slug ?>';
            //var minutes_total=14;
            var seconds_total=60;

            $.ajax({
              url: "{{ route('get_start_timer_confirm') }}",
              type: 'post',
              data:{'game_key':game_key},
              success: function(data) {

                if(data=="1"){
                  set_timer();
                }
                var diff = Math.abs(new Date(data['edate']).getTime() - new Date(data['sdate']).getTime());
                var minutes = 15- (Math.floor(diff / 60000));
                var seconds = 60-((diff % 60000) / 1000).toFixed(0);
                  
                if(minutes < 0){
                  seconds=0;
                  timer_up();
                }
                else{
                  seconds=seconds + ((minutes-1)*60);
                }
                TIME_LIMIT=seconds;
                     startTimer();

  
                }
            });


       }
       
document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;
       function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    //alert(TIME_LIMIT);
    timeLeft = TIME_LIMIT - timePassed;
    
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);
     //alert(timeLeft);
    if (timeLeft <= 0) {
     timer_up();
    }
  }, 1000);
}
       function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  const rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
</script>
<!-- typehead for search friend -->

 <script src="{{ url('public/js/typeahead.bundle.js') }}"></script> 
<!-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> -->
<!-- Initialize typeahead.js on the input for search friend -->
<script>
    $(document).ready(function() {
      var game_mode = '<?php echo $wager_data->gamemode; ?>';
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
                  var e="'"+data.email+"'";
                  var epicid ="";
                  var disabled="";
                  var epicid ='Epicid : "'+data.epicid+'"';
                  var valorantid ='Valorantid : "'+data.valorantid+'"';

                  // if(data.epicid==null || data.epicid==""){

                  // }
                  // if(data.epic_profile_id==null || data.epic_profile_id==""){

                  // }

                  // if(data.valorantid==null || data.valorantid==""){

                  // }

                  if(game_mode=="Valorant" && (data.valorantid==null || data.valorantid=="")){
                    disabled="disabled";
                  }

                  if(game_mode!="Valorant" && (data.epicid==null || data.epicid=="")){
                     disabled="disabled";
                  }

                  if(game_mode!="Valorant" && (data.epic_profile_id==null || data.epic_profile_id=="")){
                    disabled="disabled";
                  }

                  if(data.valorantid==null || data.valorantid==""){
                    var valorantid ='Valorantid : ""';
                  }
                  if(data.epicid==null || data.epicid==""){
                    var epicid ='Epicid : ""';
                  }

                  //disabled="disabled";

                  return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.name + '<br>'+ data.email + '<br>' + epicid + '<br>' + valorantid +'<button type="button" class="btn btn-success btn-sm waves-effect waves-light" style="float:right;margin-top:0px;" id="'+data.email+'"  onclick="send_request(' + e + ')">Send Request</button></div></div>';
                }
            }
        });
    });

function send_request(id){
  
  var gamer_key = '<?php echo @$wager_data->id ?>';
  var gamer_sluged = '<?php echo @$wager_data->gamer_slug ?>';
  var gamemode = '<?php echo @$wager_data->gamemode; ?>';
  var gameamount = '<?php echo @$wager_data->amount; ?>';

    $.ajax({
        type: 'post',
        data: {
            'epicid': id,'gamer_key': gamer_key,'gamer_sluged': gamer_sluged,'gameamount': gameamount,'gamemode': gamemode,
        },
        url: "{{ route('send_request') }}",
        success: function(data) {
          
          if(data!="false"){
            //toastr.info(data);
            $("#success_text").html(data);
            $('#successModal').modal('show');
          }
        }
    });
}

function clickFire(timeLeft){
   var sendDataTimeout = function(){
  //document.querySelector('.user').click();
       $('.user')[0].click();
   }
   setTimeout(sendDataTimeout, 1000);
}
</script>

@endsection