@extends('layouts.frontLayout.front_design')
@section('title','Disputed')
@section('content')
<center>
<section id="terms">
    <div class="container wagers profile">
        <h1>Dispute </h1>
        <h2>Your game is in dispute</h2>
        <p>
           Admin will contact soon Please Wait..
        </p>
        <button class="button button--outline" style="color: #fff;border-color: #fff" onclick="modal()">Upload Screenshot</button>
    </div>
</section>
       
     <div class="col col-12 col-xl-4">
          <h4 style="color:#4daaf2;">Admin Comments</h4>
                <div class="chatbox-wrapper">
                    <div class="chatbox" id="chatbox"></div>
                </div>
     </div>
</center>
<style type="text/css">
	 label{
	 	color: black !important;
	 }
</style>
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
                <form method="post" action="{{ route('dispute_image') }}" name="dispute" id="dispute" enctype="multipart/form-data">
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
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f468e45cc6a6a5947af0cc6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<script type="text/javascript">
	$(document).ready(function(){
		hrefurl=$(location).attr("href");
		last_part=hrefurl.substr(hrefurl.lastIndexOf('/') + 1);
		$('#dispute_game_key').val(last_part);
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
                            //toastr.error("Please Try Again...!");
                            $("#error_text").html("Issue has been solved...!");
                            $('#errorModal').modal('show');
                          }
                          else{
                            $('#disputemodal').modal('hide');
                            //toastr.info(data);
                            $("#success_text").html(data);
                            $('#successModal').modal('show');
                          }

                          // window.location.href="{{ url('cart') }}";
                        },
                    });
                }
          });
	});

function modal(){
	$('#disputemodal').modal('show');
}
</script>

   <script type="text/javascript">
    $(document).ready(function(){
             get_admin_comment();
          });
          
              function get_admin_comment(){
                    var key = '{{ $key}}';
                  $.ajax({
                    url: "{{ route('view_comment') }}" ,
                    type: "POST",
                     data: {'key': key},
                    success: function(data) {
                      $("#chatbox").html('');
                       if(data == 'false'){

                       } else {                 
                        data.forEach(function(object) {
                        $("#chatbox").append('<p>'+object['admin_comment']+'</p>');

                        });

                        var objDiv = document.getElementById("chatbox");
                        objDiv.scrollTop = objDiv.scrollHeight;

                       }
                    }
                });
         }      

          setInterval(function() {
       get_admin_comment();
    }, 9000);


    </script>        
@endsection





 