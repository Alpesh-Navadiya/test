@section('title','Disputed Wagers')
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
                <h3 class="card-title">Game Wagers Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="disputed_data_list"></div>
                <!-- <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Game Key</th>
                    <th>Game Mode</th>
                    <th>Server</th>
                     <th>Amount</th>
                    <th>Console</th>
                    <th>V/s</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($disputed as $val)
                    <tr>
                        <td>{{ $val->game_key}}</td>
                        <td>{{ $val->gamemode}}</td>
                        <td>{{ $val->server}}</td>
                        <td> {{ $val->amount}}</td>
                        <td>{{ $val->console}}</td>
                        <td>{{ $val->vs_type}}</td>
                        <td><a href="{{ url('/admin/disputedgame')}}/{{ $val->game_key }}">View</a> </td>
                    </tr>
                  @endforeach()
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Game Key</th>
                    <th>Game Mode</th>
                    <th>Server</th>
                     <th>Amount</th>
                    <th>Console</th>
                    <th>V/s</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card - stop->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/html5.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/vfs_fonts.js')}}"></script>
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
<script type="text/javascript">
    $(document).ready(function(){
             get_dispute_data();
          });
          
              function get_dispute_data(){
                    
                  $.ajax({
                    url: "{{ route('disputed_data') }}" ,
                    type: "GET",
                    
                    success: function(data) {

                      $("#disputed_data_list").html('');
                      if(data == ''){
                        $("#disputed_data_list").html('No Record Found..');  
                      }
                      
                       if(data == 'false'){
                       
                       } else {                 
                        data.forEach(function(object) {
                       console.log(data);
                       $("#disputed_data_list").append('<table id="example1" class="table table-bordered table-striped"><thead><tr><th>Game Key</th><th>Game Mode</th><th>Server</th><th>Amount</th><th>Console</th><th>V/s</th><th>Action</th></tr></thead> <tbody><tr><td>'+object['game_key']+'</td><td>'+object['gamemode']+'</td><td>'+object['server']+'</td><td>'+object['amount']+'</td><td>'+object['console']+'</td><td>'+object['vs_type']+'</td><td><a href="{{ url('/admin/disputedgame')}}/'+object['game_key']+'">View</a> </td></tr></tbody><tfoot><tr><th>Game Key</th><th>Game Mode</th><th>Server</th><th>Amount</th><th>Console</th><th>V/s</th><th>Action</th></tr></tfoot></table>');

                        });

                       
                       }
                    }
                });
         }      

          setInterval(function() {
       get_dispute_data();
    }, 9000);


    </script> 
@endsection()