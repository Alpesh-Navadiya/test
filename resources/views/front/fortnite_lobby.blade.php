@extends('layouts.frontLayout.front_design')
@section('title','Confirm')
@section('content')
<style type="text/css">
        .card-lobby {
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

        .card1 {
            background-color: #21252963;
            color: skyblue;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .btn-link {
            color: white;
            font-weight: 800;
            margin: 0rem;
        }

        .btn-link:hover {
            color: white;
        }

        h1 {
            color: #4daaf2;
            margin: 5px;
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

        .lobby-player-title {
            font-size: 15px;
            margin-top: 20px;
            margin-bottom: 0px !important;

        }

        .lobby-player-waiting {
            font-size: 15px;
            margin-top: 20px;
            margin-bottom: 0px !important;
        }

        .lobby-vs-img {
            text-align: center;
            justify-content: center;
        }div#headingOne {
             background: #4daaf2;
             border: 1px solid #4daaf2;
         }

        .score1 {
            margin: 15px;
            text-align: center;
            font-family: "rajdhani-bold";
        }
        .score1 p {
            padding-bottom: 7px;
        }
        .score1:last-child{
            opacity: 0.5;
        }
        .score1 h1{
            font-size: 55px;
        }

        .score {
            background-color: #e4e4ea;
            border: 1px solid;
            height: calc(1.5em + .75rem + 7px);
        }

        .confirm-btn {
            float: right;
        }

        .btn-sm {
            color: black;
            font-weight: 900;
        }

        .score-total {
            font-size: 30px;
            font-weight: bold;
        }

        .lobby-first {
            padding: 1rem;
            margin-top: 124px;
        }
        span.usd {
        font-size: 30px;
        font-weight: 600;
      }
</style>
    <section class="lobby-first">
      <div class="main-panel">
          <div class="container">

             <div class="row justify-content-md-center">
              <div class="col-sm-6">
                <h1>In Game</h1>
                <p><?php echo @$wager_data->gamemode . ' ' . @$wager_data->vs_type; ?>  <span class="usd">  &nbsp; <?php echo @$wager_data->amount; ?> $</span></p>
              </div>
              <div class="col-sm-6 dispute text-right" style="vertical-align: bottom;">
                <!-- <button type="button" class="btn btn-outline-info btn-sm">PlayTime : <div class="countdown"> </div></button> -->
                <button type="button" onclick="dispute_game()" class="btn btn-outline-danger btn-sm">Dipute Game</button>
                </div>
              </div>
              <hr style="border: 1px #4daaf2 solid;margin-top:0px!important">

            <div class="row">

          <div class="col-lg-8">

                <div class="row">
                <div class="col-sm-5">
                    <div class="card-lobby wow" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                      <div class="lobby-player-img">
                      <?php
if (Auth::user()->pimage) {
  $pimage = 'images/' . Auth::user()->pimage;
} else {
  $pimage = 'images/question.png';
}
?>
                      <img class="" src="{{url('public/assets/'.$pimage)}}" alt="">
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

                    </div>
                    <div class="card-lobby wow" id="own_member_id" style="display:none;animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                      <div class="lobby-player-img">
                      <img class="" id="own_member_image" src="{{url('public/assets/character/ch2_final.png')}}" alt="">
                    </div>
                    <h2 class="lobby-player-title own-sqard"></h2>
                    <p id="own_member_name"></p>
                    <p class="epic-id" ><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="own_member_epicid">epic ID </span></p>

                    </div>
                  </div>
                  <div class="col-sm-2" style="justify-content: center; align-items: center;     display: flex;" >
                     <div class="col-md-12" style="justify-content: center;align-items: center;display: flex;"><h1></h1></div>
                      <div class="col-md-12 vs-row" style="justify-content: center;align-items: center;display: flex;margin-top: 0px">
                        <div class="score1">
                            <p>score</p>
                            <h1 id="own_score"></h1>
                        </div>
                        <div class="vs">
                          <img src="{{url('public/assets/character/vs.png')}}" width="60px">
                        </div>
                        <div class="score1">
                          <p>score</p>
                          <h1 id="opponent-score"></h1>
                        </div>

                      <!-- <h1> <label class="score-total" id="own_score"></label></h1>
                      <div class="vs">
                      <img src="{{url('public/assets/character/vs.png')}}" width="85px">

                      </div>
                      <h1> <label class="score-total" id="opponent-score"></label></h1> -->

                    </div>
                    <br>
                    <div class="col-md-12" style="justify-content: center;align-items: center;display: flex;">
                       <input class="form-control score" type="hidden" id="game_key" name="game_key" placeholder="Enter Key" value="<?php echo $wager_data->gamer_slug ?>">
                      <form method="post" id="confirm-score" name="confirm-score" action="{{ route('confirm_score') }}">
                      <label class="score-total" id="opponent-score"></label>
                      <input class="button button--main button--square confirm-btn" type="submit" value="Confirm Score">
                      </form>
                    </div>
                </div>

                <div class="col-sm-5">
                <input type="hidden" id="chat_slug" value="{{ @$wager_data->gamer_slug }}"/>
                    <div class="card-lobby wow" id="opponent_id" gkey="{{ @$wager_data->gamer_slug }}" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                      <div class="lobby-player-img">
                     <img class="user" id="opponent_image" src="{{url('public/assets/images/question.png')}}" alt="">
                    </div>
                    <h2 class="lobby-player-waiting opponent-sqard"></h2>
                    <p id="opponent_name">Waiting for players</p>
                    <p class="epic-id"><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="opponent_epicid">Epic ID<span> </p>

                      </div>
                      <div class="card-lobby wow oppnent_member_id" style="display:none"  id="opponent_member_id" gkey="{{ @$wager_data->gamer_slug }}" style="animation-delay: 0.2s; animation-duration: 1.5s; animation-name: fadeInLeft; visibility: visible;">
                        <div class="lobby-player-img">
                      <img class="" id="opponent_member_image" src="{{url('public/assets/images/question.png')}}" alt="">
                    </div>
                    <h2 class="lobby-player-waiting opponent-sqard"></h2>
                    <p id="opponent_member_name">Waiting for players</p>
                    <p class="epic-id"><img src="{{url('public/assets/images/epic.png')}}" class="img-fluid"> <span id="opponent_member_epicid">epic ID </span></p>
                        </div>
                      </div>

              </div>




              </div>
             <div class="col-lg-4">

               <div class="card-chat card-bordered">
                 <div class="card-header">
                   <h4 class="card-title"><strong><a class="btn btn-xs btn-info" href="#" data-abc="true">Chat </a></strong></h4>
                 </div>

                 

                  <div class="ps-container ps-theme-default ps-active-y message-wrapper" id="chat-content " style="overflow-y: scroll !important; height:200px !important;">

                 <div id="messages"></div>
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
                      <button type="button" class="publisher-btn button button--main button--square sendClick" >Send</button> 
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

        <img class="" src="{{url('public/assets/images/trophy.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h4 style="color:red" id="game_status"><center>Game Finished..</center></h4>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger final_confirm" onclick="finish()">Confirm</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="
        $('#disputemodal').modal('show')">Dispute</button>
      </div>
    </div>
  </div>
    </div>

    <div id="finishModal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-header flex-column">
            <div class="icon-box">

            <img class="" src="{{url('public/assets/images/trophy.png')}}" width="65"/>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <h4 style="color:red" id="game_status"><center>Game Finished..</center></h4>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Finish</button>
          </div>
        </div>
      </div>
    </div>

    <div id="disputemodal" class="modal fade">
      <div class="modal-dialog modal-confirm">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12" >
                <h6 class="" style="text-align: justify;color: red">If you suspect the other player is cheating, or they inputted the wrong score, take screenshot upload it and hit dipute to notify a moderator. The game will be put on hold until a moderator resolves the dispute.</h6>
              </div>
              <div class="col-md-12">
                <div class="dipute-form">
                  <label style="color: #111">Screenshot</label>
                    <form method="post" action="{{ route('dispute') }}" name="dispute" id="dispute" enctype="multipart/form-data">
                      <div class="input-group">
                        <input class="form-control score" type="file" name="dispute_image" id="dispute_image">
                        <input class="form-control score" value="" type="hidden" name="dispute_game_key" id="dispute_game_key">
                        <input class="button button--main button--square" style="background: #DC3545 !important;border:none;" type="submit" value="Dispute">
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <script type="text/javascript">
        var check_final_score="0";
        $(document).ready(function(){

          $('.confirm-btn').hide();
          

          $('#dispute_game_key').val('<?php echo $wager_data->gamer_slug ?>');
          get_current_game_info();
          get_opponent_info();
          clickFire();
          // enter Score
          $("#score_enter").validate({
            rules: {
                score: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Score is required"
                }
            },
             submitHandler:function(form){
                    var formurl = $(form).attr('action');
                    $.ajax({
                        url: formurl ,
                        type: "POST",
                        data: new FormData(form),
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                          if(data!="false"){
                            toastr.info(data);
                            get_current_game_info();
                          }
                          else{

                          }
                               // window.location.href="{{ url('cart') }}";
                        },
                    });
                }
          });

          // confirm score
          $("#confirm-score").validate({

             submitHandler:function(form){
                    var game_key = '<?php echo $wager_data->gamer_slug ?>';
                    var formurl = $(form).attr('action');
                    $.ajax({
                        url: formurl ,
                        type: "post",
                        data:{'game_key':game_key},
                        success: function(data) {
                        
                          if(data!="false"){
                            // toastr.info('Confirmed...!');
                            $("#disputemodal").hide();
                            get_current_game_info_completed()
                            // $('.confirm-btn').hide();
                          }
                          else{
                            toastr.error('Try Again...!');
                          }
                               // window.location.href="{{ url('cart') }}";
                        },
                    });
                }
          });

          // enter Dispute
          $("#dispute").validate({
            rules: {
                dispute_image: {
                    required: true,
                    accept: "image/jpg,image/jpeg,image/png,image/",
                }
            },
            messages: {
                dispute_image: {
                    required: "Dispute Image is required",
                    accept: 'Not an image!',
                }
            },
             submitHandler:function(form){
                    var formurl = $(form).attr('action');
                    $.ajax({
                        url: formurl ,
                        type: "POST",
                        data: new FormData(form),
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                          if(data=="false"){
                            toastr.error("Please Try Again...!");
                          }
                          else{
                            $('#disputemodal').modal('hide');
                            toastr.info(data);
                              window.location.href="{{ url('disputedpage') }}/<?php echo $wager_data->gamer_slug ?>";
                          }

                          // window.location.href="{{ url('cart') }}";
                        },
                    });
                }
          });

        set_time();
        });

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
               //   $('.user')[0].click();
                $("#confirm").show();
                $('#opponent_id').val(oppId);
                $('#opponent_name').html(data['name']);
                if(game_mode!="valorant"){
                  $('#opponent_epicid').html(data['epicid']);
                }
                else{
                  $('#opponent_epicid').html(data['valorantid']);
                }

                if(data['pimage']=="" || data['pimage']==null){
                  $("#opponent_image").attr("src","{{ url('public/assets/'. $pimage)}}");
                }
                else{
                  var pimage = data['pimage'];
                  $("#opponent_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
                }
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
                  $('.user')[0].click();
                    $("#oppo_id").hide();
                    $('#opponent_id').val(oppId)
                    $('#opponent_name').html(object['name']);

                    $('#opponent_epicid').html(object['epicid']);

                    if(data['pimage']=="" || object['pimage']==null){
                      $("#opponent_image").attr("src","{{ url('public/assets/images/question.png')}}");
                    }
                    else{
                      var pimage = object['pimage'];
                      $("#opponent_image").attr("src","{{ url('public/assets/images/') }}/" +pimage);
                    }
                  }
                  else{
                    var oppId = object['id'];
                    $("#opponent_member_id").show();
                    $('#opponent_member_id').val(oppId)
                    $('#opponent_member_name').html(object['name']);
                     $('#opponent_member_epicid').html(object['epicid']);

                    if(data['pimage']=="" || data['pimage']==null){
                     // $("#opponent_member_image").attr("src","{{ url('public/assets/'. $pimage)}}");
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

      // get current game info for 1V1
      function get_current_game_info(){
          var game_key = '<?php echo $wager_data->gamer_slug ?>';
          var ot="";
          $.ajax({
            url: "{{ route('get_current_game_info') }}" ,
            type: 'post',
            data:{'game_key':game_key},
            success: function(data) {
              if(data=="disputed"){
                window.location.href = "{{ url('disputedpage')}}/"+game_key+"";
                return false;
              }

              $( data ).each(function( index ) {

                // set squard
                if(data[index]['gamername']== <?php echo '"' . Auth::user()->email . '"'; ?>){
                    if(data[index]['sqard']=="Team 1"){
                      ot="Team 1";
                      $('.own-sqard').html('Team 1');
                      $('.opponent-sqard').html('Team 2');
                    }
                      else{
                        ot="Team 2";
                      $('.own-sqard').html('Team 2');
                      $('.opponent-sqard').html('Team 1');
                    }
                }

                // check login user score inserted ir ot
                if(data[index]['gamername']== <?php echo '"' . Auth::user()->email . '"'; ?> && data[index]['score']!='-1'){
                  $('#score_enter').hide();
                  $('#own_score').html(data[index]['score']);
                }

                // check other user score

                if(ot!=data[index]['sqard'] && data[index]['score']!='-1'){
                  $('#opponent-score').html(data[index]['score']);
                  $('#score_final').val(data[index]['score']);
                  $('#score_final').val(data[index]['gamername']);
                  // alert(data[index]['sqard']);
                  // $('.confirm-btn').show();
                }

                // check login user score confirmed of oppnent
                if(data[index]['gamername']== <?php echo '"' . Auth::user()->email . '"'; ?> && data[index]['score_confirm']=='1'){
                  // $('.confirm-btn').hide();
                }

                // check game over
                $game_over="0";
                if(data[index]['game_over']=='1'){
                  // alert('done');
                }

               
                if(data[index]['score']=='5'){
                  check_final_score="1";
                  $("#game_status").html(data[index]['sqard']+ ' is Winner.' );
                   // $( ".confirm-btn" ).click();
                }

                if(check_final_score=="1" && data[index]['score_confirm']=="0"){
                  $('#cancelModal').modal('show');
                }
                if(check_final_score=="1" && data[index]['score_confirm']=="1" && data[index]['gamername']== <?php echo '"' . Auth::user()->email . '"'; ?>){
                  $('#cancelModal').modal('show');
                  $('.final_confirm').html('Wait...!');
                  $('.final_confirm').prop("disabled",true);
                }


              });

            }
          });
      }

       function get_current_game_info_completed(){
          var game_key = '<?php echo $wager_data->gamer_slug ?>';
          $.ajax({
            url: "{{ route('get_current_game_info_completed') }}" ,
            type: 'post',
            data:{'game_key':game_key},
            success: function(data) {
             
              if(data==0){

              }
              else{
               $("#game_status").html(data['sqard']+ ' is Winner.' );
               $('#finishModal').modal('show');

                $('#finishModal').on('hidden.bs.modal', function () {
                    window.location.href="{{ url('wager/fortnite') }}";
                });
              }

            }
           });
       }

       function dispute_game(){
        $('#disputemodal').modal('show');
       }

       function set_time(){

            var game_key = '<?php echo $wager_data->gamer_slug ?>';
            var minutes_total=14;
            var seconds_total=60;

            $.ajax({
              url: "{{ route('get_start_time') }}",
              type: 'post',
              data:{'game_key':game_key},
              success: function(data) {

                if(data=="1"){
                  set_time();
                }
                var diff = Math.abs(new Date(data['edate']).getTime() - new Date(data['sdate']).getTime());

                var minutes = Math.floor(diff / 60000);
                var seconds = ((diff % 60000) / 1000).toFixed(0);

                if(minutes>=15){
                  // time_up();
                }

                minutes_total=minutes_total-minutes;
                seconds=60-seconds;
                seconds_total=seconds;

                var timer2 = minutes_total+":"+seconds_total;

                var interval = setInterval(function() {

                  var timer = timer2.split(':');
                  //by parsing integer, I avoid all extra string processing
                  var minutes = parseInt(timer[0], 10);
                  var seconds = parseInt(timer[1], 10);
                  --seconds;
                  minutes = (seconds < 0) ? --minutes : minutes;
                  seconds = (seconds < 0) ? 59 : seconds;
                  seconds = (seconds < 10) ? '0' + seconds : seconds;
                  //minutes = (minutes < 10) ?  minutes : minutes;
                  $('.countdown').html(minutes + ':' + seconds);
                  if (minutes < 0) clearInterval(interval);
                  //check if both minutes and seconds are 0
                  if ((seconds <= 0) && (minutes <= 0)){ clearInterval(interval);
                  //time_up();
                  }
                  timer2 = minutes + ':' + seconds;
                }, 1000);

                }
            });
       }
       function dispute_game(){
        $('#disputemodal').modal('show');
       }
       function time_up(){
          return false;
          var vs_type = '<?php echo $wager_data->vs_type ?>';
          var game_key = '<?php echo $wager_data->gamer_slug ?>';
          var game_mode = '<?php echo $wager_data->gamemode ?>';

          $.ajax({
              url: "{{ route('check_dispute') }}",
              type: 'post',
              data:{'game_key':game_key},
              success: function(data) {
                 //alert(data);
                 if(data == '1'){
                    return false;
                   }
                  else {
                    $.ajax({
              url: "{{ route('terminate_game') }}",
              type: 'post',
              data:{'game_key':game_key},
              success: function(data) {
                if(data=="true"){
                  toastr.error('Game is terminated...!');

                  if(game_mode == 'Valorant'){
                    window.location.href="{{ url('wager/valorant') }}";
                       }
                       else {
                        window.location.href="{{ url('wager/fortnite') }}";
                       }

                }
                }
            });
                  }
                }
            });
       }

        setInterval(function(){
          get_current_game_info();
         
          get_current_game_info_completed();
        }, 6000);

        setInterval(function(){
 get_opponent_info();
}, 8000);

function clickFire(timeLeft){
   var sendDataTimeout = function(){
   //alert('OK');
       $('.user')[0].click();
   }
   setTimeout(sendDataTimeout, 1000);
}
      function finish(){
         $('.confirm-btn').click();
      }

      </script>

@endsection