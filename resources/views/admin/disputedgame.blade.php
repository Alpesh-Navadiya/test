@section('title','Disputed Game')
@extends('layouts.adminLayout.admin_design')
@section('content')
<link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
 <style>.dt-buttons{float:left;color: #000;border-color: #4e555b;    }
.dt-buttons button {border-radius: .30rem !important;background-color: #fff;border-color: #007bff;}
</style>
<!--main-container-part-->
<!--end-main-container-part-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Disputed Game</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>

                  <tr>
                    <th>Gamer Name</th>
                    <th>Game Mode</th>
                    <th>Sqard</th>
                    <th>Score</th>
                    <th>Dispute Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($disputedgame as $val)
                    <tr>
                        <td>{{ $val->gamername}}</td>
                        <td>{{ $val->gamemode}}</td>
                        <td>{{ $val->sqard}}</td>
                        <td> {{ $val->score}}</td>
                        <td><img src="{{ url('public/dispute/') }}/{{ $val->dispute_image}}" width='60' height="60" alt="image"> <a target="_blank" href="{{ url('public/dispute/') }}/{{ $val->dispute_image}}"> View Image</a></td>
                    </tr>
                  @endforeach()
                  </tbody>
                  <tfoot>
                  <tr>
                        <th>Gamer Name</th>
                        <th>Game Mode</th>
                        <th>Sqard</th>
                        <th>Score</th>
                        <th>Dispute Image</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Final Score update
              </h3>
              <!-- tools box -->

              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
            <div class="card-body">
            <form role="form" name="disputedgame" id="disputedgame" action="{{ route('disputedscore')}}" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <input type="hidden" name="gamekey" value="{{ @$val->game_key}}"/>
                      <div class="form-group">
                        <label>Team 1</label>
                        <input type="number" class="form-control" name="team1" id="team1"  >

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Team 2</label>
                        <input type="number" class="form-control" name="team2" name="team2">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Update">

                      </div>
                    </div>

                  </div>


                </form>
                
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Add Comment
              </h3>
              <!-- tools box -->

              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
            <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <form role="form" name="admin_chat" id="admin_chat" action="{{ route('add_comment')}}" method="post">
                      <input type="hidden" name="gamekey" value="{{ @$val->game_key}}"/>
                      <div class="form-group">
                        <label>Comment</label>
                        <input type="text" class="form-control" name="comment" id="comment"  >

                      </div>
                      <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Update">

                      </div>
                      </form>
                    </div>


                    <style type="text/css">
                      .view_chat{
                            border: 1px solid #ddd;
    padding: 10px 20px 10px 20px;
    color: #17a2b8;
    height: 150px;
    overflow: auto;

                      }
                      .view_chat p{
                        border-bottom: 1px solid #ddd;
                      }
                    </style>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>History</label>
                        <div class="view_chat" id="view_chat">
                        <p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p>
                      <p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p>
                      <p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p>
                      <p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p>
                      <p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p><p>hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
                        fghfgfghfghfghfh
                      fghfghfghfg</p>
                        </div>
                      </div>
                    </div>


                 <div class="col-sm-6">
                      <label>Terminate Game :</label>
                      <div class="form-group">
                      <input type="button" class="btn btn-info terminate" value="Terminate">
                      </div>
                    </div>

                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <script type="text/javascript">
  $(document).ready(function () {
    get_admin_comment();
    $("#disputedgame").validate({

        rules: {
            team1: {
                required: true
            },
            team2: {
                required: true
            },
        },
        messages: {

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
                     // alert(data);

                     window.location.href="{{ route('disputed') }}";

                    },
                });
            }
    });

    $("#admin_chat").validate({

        rules: {
            comment: {
                required: true
            },
            gamekey: {
                required: true
            },
        },
        messages: {
          comment: {
                required: "Please Add a Comment"
            },
            gamekey: {
                required: "Please Add a Comment",
            },
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
                        $("#comment").val('');
                        get_admin_comment();
                      }
                    },
                });
            }
    });

});

    function get_admin_comment(){
           var key = "{{ @$val->game_key}}";
                  $.ajax({
                    url: "{{ route('view_comment') }}" ,
                    type: "POST",
                     data: {'key': key},
                    success: function(data) {
                      $(".view_chat").html('');
                       if(data == 'false'){
                       } else {
                        data.forEach(function(object) {
                        $(".view_chat").append('<p>'+object['admin_comment']+'</p>');
                        });
                        var objDiv = document.getElementById("view_chat");
                        objDiv.scrollTop = objDiv.scrollHeight;
                       }
                    }
                });
         }
</script>
<script>
$(document).ready(function(){
  $('.terminate').click(function(){
    var game_key = "{{ @$val->game_key}}";
    var result = confirm("Do you really want to terminate game?");
       if(result){
         $.ajax({
           url: "{{ route('admin_terminate_game')}}",
           type: 'POST',
           data: { game_key:game_key },
           success: function(response){
            
             window.location.href="{{ route('disputed') }}";
           }
         });
       } 
  });
});
</script>
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
    <script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,

      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>
@endsection()