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
                        toastr.error('Select Team First');
                         return;
                      }
                      if(data == 'false'){
                        toastr.error('You have enter wrong password');
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
                    toastr.error('Update Your Valorant Id in Profile');
                    return;
                  }
                }else{
                  if(epicid==null || epicid==""){
                    toastr.error('Update Your Epic Id in Profile');
                    return;
                  }else{
                    if(epicprofileid==null || epicprofileid==""){
                    toastr.error('Verify Epic Erofile Id in Profile');
                    return;
                  }
                  }
                }

                if(server==null || server==""){
                  toastr.error('Select A Server In Profile');
                    return;
                }

                window.location.href = "{{ route('confirm')}}/"+id+"/"+team+"";

 });
