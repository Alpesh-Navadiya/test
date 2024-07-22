@section('title','Dashboard')
@extends('layouts.adminLayout.admin_design')
@section('content')
<link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
 <style>.dt-buttons{float:left;color: #000;border-color: #4e555b;    }
.dt-buttons button {border-radius: .30rem !important;background-color: #fff;border-color: #007bff;}
</style> 
 

<!-- form start -->

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gamemode</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="gamemode" id="gamemode" action="{{ route('add_gamemode')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Gamemode Type</label>
                        <input type="hidden" name="id" id="id">
                        <select class="custom-select " name="gamemodetype" id="gamemodetype">
                          <option value="">Select Gamemode</option>
                          <option value="Fortnite">Fortnite</option>
                          <option value="Valorant">Valorant</option>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gamemode Name</label>
                    <input type="text" class="form-control" id="gamemodename" name="gamemodename" placeholder="Enter Gamemode Name">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="gamemodeadd" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>

<section class="content">
   <div class="container-fluid">
   <div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Gamemode List</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Gamemode Type</th>
                     <th>Gamemode Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                  <tr>
                      <th>Gamemode Type</th>
                     <th>Gamemode Name</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
            </table>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card - stop->
         </div>
         </div>
         /.row -->
   </div>
   <!-- /.container-fluid -->
</section>

<script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->


<script type="text/javascript">
  $(document).ready(function () {
    
    read_data();

    $("#gamemode").validate({
       errorClass: 'is-invalid',
        rules: {
            gamemodetype: {
                required: true
            },
            gamemodename: {
                required: true,
            }
        },
        messages: {
            gamemodetype: {
                required: "Gamemode Type is required"
            },
            gamemodename: {
                required: "Gamemode Name is required"
            }
        },
         submitHandler:function(form){
                $("#gamemodeadd").prop('disabled', true);
                var formurl = $(form).attr('action');
                $.ajax({
                    url: formurl , 
                    type: "POST",             
                    data: new FormData(form),
                    cache: false,             
                    processData: false,
                    contentType: false,      
                    success: function(data) {
                          if(data!='false'){
                             toastr.info(data);
                             $("#gamemode").trigger('reset');
                             $(':input').val('');
                             $('#gamemodeadd').text("Submit");
                             read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#gamemodeadd").prop('disabled', false);
                    },
                });
            }
    });
    
});
</script>

<script>
        function read_data(){
          
          if($.fn.DataTable.isDataTable('#example1')){
            $('#example1').DataTable().destroy();
          }
          $('#example1').DataTable({
            processing: true,
            language: {
                processing: '<span>Processing</span>',
            },
            serverSide: true,
            ajax: '{{ route('read_gamemode') }}',
            paging: false,
            ordering: false,
            autoWidth: false,
            sortable: false,
            filter: false,
            info: false,
            dom: 'Blfrtip',
            columns: [
              { data: "gtype" }, 
              { data: "name" },
              { data: "id" }
            ],
          });

        }
        function edit_data(id){
            $.ajax({
              url: '{{ route('update_gamemode') }}',
              type: "POST",             
              data: { uid: id },
              cache: false,             
              // processData: false,
              // contentType: false,      
              success: function(data) {
                $("#id").val(data['id']);
                $("#gamemodename").val(data['gamemode_name']);
                $("#id").val(data['id']);
                $("#gamemodename").val(data['gamemode_name']);
                $("#gamemodetype option[value="+data['gamemode_type']+"]").prop("selected", true);
                $('#gamemodeadd').text("Update");
              },
            });
        }

        function delete_data(id){
            $.ajax({
              url: '{{ route('delete_gamemode') }}',
              type: "POST",             
              data: { uid: id },
              cache: false,             
              // processData: false,
              // contentType: false,      
              success: function(data) {
                if(data!="false"){
                  toastr.info(data);
                  read_data();
                }
              },
            });
        }
</script>


@endsection()