<style type="text/css">
      .teambtn {
    font-size: 13px !important;
}
        .toast-top-center {
          top: 30%;
          left:50%;
          margin:0 0 0 -150px;
      }
      </style>
<!-- <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true" style="z-index: 9999;">
   <div class="modal-dialog modal-notify modal-info" role="document">

     <div class="modal-content">

       <div class="modal-header">
         <p class="heading lead">INFORMATION</p>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="text-center">
          <i class="fa fa-check fa-4x mb-3 animated rotateIn"  style="color:#33b5e5;"></i>
        <p style="color:#111">Please Update Your Epic Id in Profile and Add a Boat To Start a Fortnite Game.</p><p style="color:#111">Update Valorant ID in Profile To Start Valorant Game.</p><p style="color:#111">Update Your Server in Profile Section To Start a Game.</p>
         </div>
       </div>

       <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-primary" data-dismiss="modal">OK<i class="far fa-gem ml-1 text-white"></i></a>

       </div>
     </div>

   </div>
 </div> -->
 <div id="infoModal" style="z-index: 9999;" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
        <img class="" src="{{url('public/assets/images/check.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Thank You for Registration.. </h5>
        <h2 class="uppercase text-green-text tracking-wide text-2xl font-bold mx-32">email sent</h2>
        <h6> Please verify your email for further process..</h6>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info redirect_profile" data-dismiss="modal">OK</button>

      </div>
    </div>
  </div>
</div>
 <!-- <div id="infoModal" style="z-index: 9999;" class="modal fade">
  <div class="modal-dialog modal-confirm" style="width:490px;">
    <div class="modal-content">
      <div class="modal-header flex-column">


         <h5 style="color:#000;">INFORMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body"  style="font-size: 18px;">
      <ul>
        <li style="color:#111">Please Update Your Epic Id in Profile and Add a Boat To Start a Fortnite Game.</li>
        <li style="color:#111">Update Valorant ID in Profile To Start Valorant Game.</li>
        <li style="color:#111">Update Your Server in Profile Section To Start a Game.</li>
      </ul>

      </div>
      <div class="modal-footer justify-content-center">
      <button type="button" class="btn btn-info redirect_profile">Ok</button>
      </div>
    </div>
  </div>
</div> -->

<!--
 <div id="infoModal" style="z-index: 9999;" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-body">
        <p style="color: #111">Please Update Your Epic Id in Profile and Add a Boat To Start a Fortnite Game.</p>
        <p style="color: #111">Update Valorant ID in Profile To Start Valorant Game.</p>
        <p style="color: #111">Update Your Server in Profile Section To Start a Game.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>  -->
@auth
<!-- Request model Start---->

<!-- <div id="friendModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">

        <img class="" src="{{url('public/assets/images/question11.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h4 style="color:#999"><center><b>Friend Request</b></center></h4>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info" id="accept" data-dismiss="modal">Accept</button>
        <button type="button" class="btn btn-info" id="decline" data-dismiss="modal">Decline</button>
      </div>
    </div>
  </div>
</div> -->
<div id="friendModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
        <img class="" src="{{url('public/assets/images/question11.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
      <h4 style="color:#999"><center><b>Friend Request</b></center></h4>
      </div>
      <div class="modal-footer justify-content-center">
      <button type="button" class="btn btn-info" id="accept" data-dismiss="modal">Accept</button>
        <button type="button" class="btn btn-info" id="decline" data-dismiss="modal">Decline</button>
      </div>
    </div>
  </div>
</div>
<!-- 2V/s2 model Start---->
<!-- <div id="vsModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">

                <img class="" src="{{url('public/assets/images/question11.png')}}" width="65"/>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
             <input type="hidden" name="mode" id="mode" value=""/>
      <input type="hidden" name="uid" id="uid" value=""/>
      <input type="hidden" name="gamer_slug" id="gamer_slug" value=""/>

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
<div id="vsModal" class="modal fade">
  <div class="modal-dialog modal-confirm" style="width:490px;">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
        <img class="" src="{{url('public/assets/images/question11.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body" style="border:none;">
      <input type="hidden" name="mode" id="mode" value=""/>
      <input type="hidden" name="uid" id="uid" value=""/>
      <input type="hidden" name="gamer_slug" id="gamer_slug" value=""/>
      <input type="hidden" name="wageramt" id="wageramt" value=""/>
                <h5 style="color:#000; text-align:center;"><b>Which Player You Want To Play...?</b> </h5>
      <p>
      <center style="color:#000;font-size: 19px;">
         <div class="search">

                  <div class="dipute-form">
                    
                    <form method="post" action="#"> 
                     <div class="input-group">
                        <input class="form-control typeahead" style="height: auto;" type="text" id="search1" name="frndne" autocomplete="off" placeholder="Enter Epic Or Valorant Or Email Id">
                       <input class="button button--main button--square" type="submit" value="Search" style="display:none;"> 
                      </div> 
                     </form>
                </div>

              </div>
        </center>
        </p>
      </div>
    </div>
  </div>
</div>
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

        $('#search1').typeahead({
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

                  return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.name + '<br>'+ data.email + '<br>' + epicid + '<br>' + valorantid +'<button type="button" class="btn btn-success btn-sm waves-effect waves-light" style="float:right;margin-top:0px;" id="'+data.email+'"  onclick="send_request2(' + e + ')">Send Request</button></div></div>';
                }
            }
        });
    });

    function send_request2(senderEmail){

              var mode = $("#mode").val();
      var id = $("#uid").val();
      var gamer_slugid = $("#gamer_slug").val();
      var gameamount = $("#wageramt").val();

     
                var gamemode = mode;
                var epicid = '<?php echo Auth::user()->epicid ?>';
                var epicprofileid = '<?php echo Auth::user()->epic_profile_id ?>';
                var valorantid = '<?php echo Auth::user()->valorantid ?>';
                var server = '<?php echo Auth::user()->server ?>';
                if(gamemode=="Valorant"){
                  if(valorantid==null || valorantid==""){
                   // toastr.error('Update Your Valorant Id in Profile');
                    $("#error_text").html('Update Your Valorant Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }
                }else{
                  if(epicid==null || epicid==""){
                    //toastr.error('Update Your Epic Id in Profile');
                    $("#error_text").html('Update Your Epic Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }else{
                    if(epicprofileid==null || epicprofileid==""){
                    //toastr.error('Verify Epic Erofile Id in Profile');
                    $("#error_text").html('Verify Epic Erofile Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }
                  }
                }

                if(server==null || server==""){
              //    toastr.error('Select A Server In Profile');
                  $("#error_text").html('Select A Server In Profile...');
                            $('#errorModal').modal('show');
                    return;
                }
                                  $.ajax({
        type: 'post',
        data: {

             'epicid': senderEmail,'gamer_key': gamer_slugid,'gamer_sluged': gamer_slugid,'gameamount':gameamount,'gamemode':gamemode,'gameteam':'team2','gameid':id
         },
        url: "{{ route('send_request') }}",
         success: function(data) {
          
           if(data!="false"){
            //toastr.info(data);
            $("#success_text").html(data);
            $('#successModal').modal('show');
            $('#checkRadio').show();
            var team2='team2';
                window.location.href = "{{ route('confirm')}}/"+id+"/"+team2+"";
           }
         }
     });
                  
 
}
</script>
<script>
$("#check_pass").click(function(){
    var cpass = $('#cpass').val();
    var team = $("input[name='teamvs']:checked").val();
    var gamer_slug = $('#gamer_slug').val();
    $.ajax({
                    url: "{{ route('cn_check_password') }}",
                    type: "POST",
                    // data: new FormData(form),
                    data: {
                      cpass:cpass,team:team,gamer_slug:gamer_slug
                      },
                    success: function(data) {
                      if(data == 'blank'){
                        //toastr.error('Select Team First');
                        $("#error_text").html('Select Team First...');
                            $('#errorModal').modal('show');
                         return;
                      }
                      if(data == 'false'){
                       // toastr.error('You have enter wrong password');
                        $("#error_text").html('You have enter wrong password...');
                            $('#errorModal').modal('show');
                         return;
                      }
                      if(data == 'true'){
                        $('#check_pass').hide();
                        $('#checkvs').show();
                        return;
                      }
                    },
                });

 });

 $("#checkvs").click(function(){
      var team = $("input[name='teamvs']:checked").val();
      var mode = $("#mode").val();
      var id = $("#uid").val();
                var gamemode = mode;
                var epicid = '<?php echo Auth::user()->epicid ?>';
                var epicprofileid = '<?php echo Auth::user()->epic_profile_id ?>';
                var valorantid = '<?php echo Auth::user()->valorantid ?>';
                var server = '<?php echo Auth::user()->server ?>';
                if(gamemode=="Valorant"){
                  if(valorantid==null || valorantid==""){
                   // toastr.error('Update Your Valorant Id in Profile');
                    $("#error_text").html('Update Your Valorant Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }
                }else{
                  if(epicid==null || epicid==""){
                    //toastr.error('Update Your Epic Id in Profile');
                    $("#error_text").html('Update Your Epic Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }else{
                    if(epicprofileid==null || epicprofileid==""){
                    //toastr.error('Verify Epic Erofile Id in Profile');
                    $("#error_text").html('Verify Epic Erofile Id in Profile...');
                            $('#errorModal').modal('show');
                    return;
                  }
                  }
                }

                if(server==null || server==""){
              //    toastr.error('Select A Server In Profile');
                  $("#error_text").html('Select A Server In Profile...');
                            $('#errorModal').modal('show');
                    return;
                }
                window.location.href = "{{ route('confirm')}}/"+id+"/"+team+"";
 });
</script>
<script type="text/javascript">
        setInterval(function(){
          check_request();
          check_notifications();
        }, 10000);
         $(document).ready(function () {
          $('.button__badge').hide();
          check_notifications();
          var routename='<?php echo Request::route()->getName(); ?>';
          if(routename=="confirm" || routename=="lobby"){

          }
          else{
            check_ingame();
          }
          if(routename!="disputedpage"){
            check_disputed();
          }
        });
        function check_request(){
          $.ajax({
            type : 'post',
            data:{'receiver_id':'<?php echo Auth::user()->email ?>'},
            url:"{{ route('get_request') }}",
            success: function(data){
                if(data=="false"){
                }else{
                  if(data){
                  var obj = jQuery.parseJSON(data);
                if($('#friendModal').hasClass('show')){
                  return;
                }
                else{
              //  $('#friendModal').modal('show');
                }
                $('#accept').click(function () {
                var uid =  obj['game_key'];
                var gamer_slug = obj['gamer_slug'];
                var check_info="0";
                 $('#gamer_slug').val(gamer_slug);
                 $('#uid').val(uid);
                 $.ajax({
                    url: "{{ route('check_info') }}",
                    type: "POST",
                    data: {
                      gamer_slug:gamer_slug
                      },
                    success: function(data) {

                      if(data=="1"){
                                         $.ajax({
                    url: "{{ route('addfriend') }}",
                    type: "POST",
                    data: {
                      gamer_name:obj['sender_id'],
                      friend_name:obj['receiver_id']
                      },
                    success: function(data) {
                      $('#vsModal').modal('show');
                    },
                 });

                  $.ajax({
                    url: "{{ route('teamselect') }}",
                    type: "POST",
                    // data: new FormData(form),
                    data: {
                      gamer_slug:gamer_slug

                      },
                    success: function(data) {
                      var uid = obj['game_key'];
                      var arr = data.split('||');
                      var team1count = arr[0];
                      var team2count = arr[1];
                      var gamevs = arr[2];
                      $('#team1count').val(team1count);
                      $('#team2count').val(team2count);
                      if(team1count == 'full'){
                        $("#teamvs1").hide();
                      }
                      if(team2count == 'full'){
                        $("#teamvs2").hide();
                      }
                      if(gamevs == '2v2'){
                        var game_slug_public_check = $('#gamer_slug').val();
                        $.ajax({
                    url: "{{ route('public_check') }}",
                    type: "POST",
                    data: {
                      game_slug_public_check:game_slug_public_check
                      },
                    success: function(data) {
                      if(data == 'true'){
                        $('#pvc').show();
                      }else{
                        $('#pvc').hide();
                      }
                      $('#friendModal').modal('hide');
                      $('#vsModal').modal('show');
                    },
                 });


                      }
                      else {
                        window.location.href = "{{ route('confirm')}}/"+obj['game_key']+"";
                      }
                      $('#friendModal').modal('hide');
                    },
                   });
                      }
                      else{
                        //toastr.error(data);
                        $("#error_text").html(data);
                            $('#errorModal').modal('show');
                        // cansel_request("false");
                      }
                    },
                  });

                });

                $('#decline').click(function () {
                cansel_request("false");
                });
                }
              }
            }
          });
        }

        function cansel_request($redirect){

          $.ajax({
            type : 'post',
            data:{'receiver_id':'<?php echo Auth::user()->email ?>'},
            url:"{{ route('cansel_request') }}",
            success: function(data){
                 $("#error_text").html('Request has been cancelled...');
                            $('#errorModal').modal('show');
                location.reload();
                if(data=="true"){

                  if($redirect!="false"){

                  }
                }
                else{
                  
                }
            }
          });
        }

        function check_ingame(){
          $.ajax({
            type : 'post',
            url:"{{ route('check_ingame') }}",
            success: function(data){
                if(data!="false"){
                  window.location.href = "{{ route('confirm')}}/"+data+"";
                }
            }
          });
        }
        function check_disputed(){
          $.ajax({
            type : 'post',
            url:"{{ route('check_ingamedisputed') }}",
            success: function(data){
                if(data!="false"){
                  window.location.href = "{{ url('disputedpage')}}/"+data+"";
                }
            }
          });
        }
        var check_first=0;
        function check_notifications(){
          $.ajax({
            type : 'post',
            url:"{{ route('check_notifications') }}",
            success: function(data){
              $('.button__badge').hide();
              // var obj = jQuery.parseJSON(data);
              count=0;

              data.forEach(function(object) {
                  if(object['noti_status']=="0"){
                    check_first="0";
                  }
              });

              if(check_first=="0"){
                check_first="1";
                data.forEach(function(object) {
                  if(object['noti_status']=="0"){
                    count++;
                    $('.button__badge').show();
                  }
                  $('.notifications').html();
                  $(".notifications").append('<div class="notificationsBody"><p class="title">'+object['noti_type']+'</p><p class="info">'+object['noti_info']+'</p><div class="details"><a  class="link" id="myButton" target="_main" >View Details</a><p  class="date"></p></div></div>');
                   document.getElementById("myButton").onclick = function () {
                    
         window.location.href = object['noti_link'];
         //location.reload();
    };
                  
                });
                $('.button__badge').html(count);
              }
            }
          });
        }

        $( "#noti" ).hover(function() {
          $.ajax({
            type : 'post',
            url:"{{ route('viewed_notifications') }}",
            success: function(data){
              if(data=="false"){
                $('.button__badge').hide();
              }
              else{
                $('.button__badge').hide();
              }

              }

          });
        });
</script>
@endauth
@guest
   <!-- confirm model End---->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <style>.error{ margin-top:50px;}</style>
         <div class="modal-dialog cascading-modal" role="document">
            <div class="modal-content">
               <div class="modal-c-tabs">
                  <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active login_modal" data-toggle="tab" href="#panel7" role="tab">
                        Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link register_modal" data-toggle="tab" href="#panel8" role="tab">
                        Register</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <form action="{{ url('userlogin1')}}" method="POST" class="" id="loginUser">
                        <div class="modal-body mb-1">
                           <div class="md-form form-sm mb-5">
                              <input type="email" id="email" name="email" class="form-control form-control-sm validate">
                              <label data-error="wrong" data-success="right" for="email">Your email</label>
                           </div>
                           <div class="md-form form-sm mb-4">
                              <input type="password" id="password" name="password" class="form-control form-control-sm validate">
                              <label data-error="wrong" data-success="right" for="password">Your password</label>
                           </div>
                           <div class="text-center mt-2">
                              <button type="submit" class="button button--main" ><span id="login_txt">Log in</span><span style="display:none;"  id="waitelogin">Please Wait..</span></button>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <div class="options text-center text-md-right mt-1">
                           @if (Route::has('password.request'))
                           <p>Forgot  <a class="blue-text" href="{{ route('password.request') }}">
                                        {{ __('Password?') }}
                                    </a></p>
                                @endif
                           </div>
                           <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                     </div>
                     <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <form action="{{ url('userRegi')}}" method="POST" class="" id="regi">
                        <div class="modal-body">
                           <div class="md-form form-sm mb-5">
                            @if(isset($_GET['invitation_token']))
                            <input type="hidden" name="referer" value="{{ $_GET['invitation_token'] }}">
                            @endif
                              <input type="text" id="name" name="name" class="form-control form-control-sm ">
                              <label data-error="wrong" data-success="right" for="name">Your Name</label>
                           </div>
                           <div class="md-form form-sm mb-5">
                              <input type="email" id="email" name="email" class="form-control form-control-sm validate">
                              <label data-error="wrong" data-success="right" for="email">Your email</label>
                           </div>
                           <div class="md-form form-sm mb-5">
                              <input type="password" id="pwd" name="password" class="form-control">
                              <label data-error="wrong" data-success="right" for="password">Your password</label>
                           </div>
                           <div class="md-form form-sm mb-5">
                              <input type="password" id="password_confirm" name="password_confirm" class="form-control">
                              <label data-error="wrong" data-success="right" for="password">Confirm Password</label>
                           </div>
                           <div class="text-center form-sm mt-2">
                           <button type="submit" class="button button--main" id="signbtn"><span id="signup_txt">Sign up</span>  <span style="display:none;" id="waite">Please Wait..</span></button>
                           </div>
                        </div>
                        </form>
                          <div class="modal-footer">
                           <div class="options text-left">
                              <p class="pt-1">By signing up, you accept our <a href="{{ route('terms')}}" class="blue-text">Terms and conditions</a> and <a href="{{ route('privacy-policy')}}" class="blue-text">Privacy policy.</a> </p>
                           </div>
                           <div class="options text-left">
                              <button type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</div>
<script type="text/javascript">
$(document).ready(function () {

      $("#regi").validate({
        errorClass: 'error active',
        rules: {
            name: {
                required: true,
                
            },
            email: {
                required: true,
                email:true,
                remote:"{{ url('checkMail')}}"
            },
            pwd: {
                required: true
            },
            password_confirm: {
            required: true,
            equalTo: "#pwd"
        }
        },
        messages: {
            name: {
                required: "Name is required",
                // remote:"Name is already exists.."
            },
            pwd: {
                required: "Password is required"
            },
            email: {
                required: "Email Id is required",
                remote:"Email Id is already exists.."
                }
        },
         submitHandler:function(form){
          $('#waite').show();
                document.getElementById("signbtn").disabled = true;
                
                $('#signup_txt').hide();
                var formurl = $(form).attr('action');
                $.ajax({
                    url: formurl ,
                    type: "post",
                    data: new FormData(form),
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if(data == 'true'){
                          $('#waite').hide();
                           $('#signup_txt').show();
                           document.getElementById("signbtn").disabled = false;
                            var login ="'login_modal'";
                            // toastr.info(' <a data-toggle="modal" data-target="#modalLRForm" onclick="register_modal("'+login+')"> <b>Please login </b></a>"');
                           $("#regi")[0].reset();
                           $('#infoModal').modal('show');

                        } else {
                           //toastr.error('Something went wrong..');
                           $("#error_text").html('Something went wrong.....');
                            $('#errorModal').modal('show');
                        }
                    },
                  });
            }
    });
});
  </script>
<script type="text/javascript">
$(document).ready(function () {
    $("#loginUser").validate({
      errorClass: 'error active',
        rules: {
            password: {
                required: true
            },
            email: {
                required: true,
                email:true,
            }
        },
        messages: {
        },
         submitHandler:function(form){
          $('#waitelogin').show();
          $('#login_txt').hide();
                var formurl = $(form).attr('action');
                $.ajax({
                    url: formurl ,
                    type: "POST",
                    data: new FormData(form),
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                              if(data == 'true'){
                                $('#waitelogin').hide();
                                $('#login_txt').show();
                                 window.location.href="{{ url('wager/fortnite') }}";
                               }
                      else if(data == 'false'){
                         // toastr.error('Something went wrong..');
                         $("#error_text").html('Something Wrong...');
                            $('#errorModal').modal('show');
                      }
                    },
                });
            }
    });
});
  </script>
  <script>
   $('.redirect_profile').click(function(){
    window.location.href = "{{ url('userprofile')}}";
   });
  </script>
@endguest
<script src="{{ url('public/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('public/js/additional-methods.min.js') }}"></script>
<!-- <script src="{{ url('public/js/js.js') }}"></script> -->
<script src="{{ url('public/js/popper.min.js') }}"></script>
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
<script defer src="{{ url('public/js/jquery.countdown.js') }}"></script>
<script defer src="{{ url('public/js/jquery.magnific-popup.min.js') }}"></script>
<script defer src="{{ url('public/js/slick.min.js') }}"></script>
 <script defer src="{{ url('public/js/owl.carousel.min.js') }}" ></script>
<script defer src="{{ url('public/js/isotope.min.js') }}"></script>
<script defer src="{{ url('public/js/swiper.min.js') }}"></script>
<script defer src="{{ url('public/js/scripts.min.js') }}"></script>
<script defer src="{{ url('public/js/global.js') }}"></script>
<script src="{{ url('public/js/mdb.min.js') }}"></script>
<script src="{{ url('public/js/wow.min.js') }}"></script>
<script> new WOW().init(); </script>
<script src="{{ url('public/js/toastr.js') }}"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
 <!-- <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
 <script defer src="{{ url('public/js/sidebar.js') }}"></script>   -->
<script>

    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
  var gkey = $('#chat_slug').val(); 
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $(".user").trigger("click");
        $(document).on('click', '.sendClick', function (e) {
            
            clickFire();
            
            var gkey = $('#chat_slug').val(); 
           
            var message = $('.input-text input').val();
           
            if ( message != '' && receiver_id != '') {
              $(this).val(''); // while pressed enter text box will be empty
              var datastr = "receiver_id=" + receiver_id + "&message=" + message + "&gkey=" + gkey;

              $.ajax({
                  type: "post",
                  url: "{{ url('sendMessage')}}", //message1 need to create this post route
                  data: datastr,
                  cache: false,
                  success: function (data) {
                    $('.input-text input').val('');
                    //  $(".user").trigger("click");
                  },
                  error: function (jqXHR, status, err) {
                  },
                  complete: function () {
                   //   $(".user").trigger("click");
                      scrollToBottomFunc();
                  }
              })
          }
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = false;
        var pusher = new Pusher('87ff8c4a2a38fef80848', {
            cluster: 'mt1'
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            //alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
                $(".user").trigger("click");
             
            } else if (my_id == data.to) {
                $(".user").trigger("click");
               
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
        $('.user').click(function () {
         
            var message = $('.input-text input').val();
           $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();
                      var chat_slug = $('#chat_slug').val(); 

            receiver_id=$('#opponent_id').val(); 
            //alert(message);
                       //$(this).attr('id');
          
            $.ajax({
                type: "get",
                url: "{{ url('message')}}/"+receiver_id+"/"+chat_slug+"", // need to create this route
                data: "message=" + message,
                cache: false,
                success: function (data) {

                   $('.input-text input').val('');
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });
        
        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();
            var gkey = $('#chat_slug').val(); 

         //  alert(gkey);
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty
                var datastr = "receiver_id=" + receiver_id + "&message=" + message + "&gkey=" + gkey;
                $.ajax({
                    type: "post",
                    url: "{{ url('sendMessage')}}", //message1 need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
                      //  $(".user").trigger("click");
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                     //   $(".user").trigger("click");
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    // make a function to scroll down auto
    function scrollToBottomFunc() {
        //alert('asddasd');
            $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 100);
    }
</script>
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149121343-3"></script> -->
<script type="text/javascript">
   function register_modal(classname){
      $('.'+classname).trigger('click');
   }
</script>
 @if(isset($_GET['invitation_token']))
<script type="text/javascript">
  // $('.register_modal').trigger('click');
  register_modal('register_modal');
</script>
@endif

<script type="text/javascript">
  $(window).on('load', function(){$(".pageloader").fadeOut("slow");});
</script>
<div id="successModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
        <img class="" src="{{url('public/assets/images/check.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 id="success_text"> </h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info " data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
<div id="errorModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header flex-column">
        <div class="icon-box">
        <img class="" src="{{url('public/assets/images/close.png')}}" width="65"/>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5 id="error_text"> </h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
 
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
</script>