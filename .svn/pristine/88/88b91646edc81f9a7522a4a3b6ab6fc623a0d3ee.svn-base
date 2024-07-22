@section('title','Create Admin')
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
                <h3 class="card-title">Admin Users</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="changeuserinfo" id="changeuserinfo" action="{{ route('changeuserinfo')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label>Admin Email</label>
                    <input class="form-control typeahead" style="height: auto;" type="text" id="search" name="email" value="{{$email}}" onchange="edit_data()" autocomplete="off" placeholder="Enter User Email">
                  </div>
                  <div class="form-group">
                    <label>Epic Id</label>
                    <input class="form-control" type="text" id="epicid" name="epicid" value="" placeholder="Enter Epicid">
                  </div>
                  <div class="form-group">
                    <label>Valorant Id</label>
                    <input class="form-control" type="text" id="valorantid" name="valorantid" value="" placeholder="Enter Valorantid">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="changeuserinfo_btn" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>

<!-- <section class="content">
   <div class="container-fluid">
   <div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Admin Users Lists</h3>
         </div>
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Admin Name</th>
                     <th>Admin Email</th>
                     <th>Ip Address</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                  <tr>
                     <th>Admin Name</th>
                     <th>Admin Email</th>
                     <th>Ip Address</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
            </table>
         </div>
      </div>
   </div>
</section> -->

<!-- <script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script> -->

<!-- <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> -->


<script type="text/javascript">
  $(document).ready(function () {

    // read_data();
    edit_data('{{$email}}');

    $("#changeuserinfo").validate({
       errorClass: 'is-invalid',
        rules: {
            email: {
                required: true,
                email:true
            }
        },
        messages: {
            email: {
                required: "Email is required"
            }
        },
         submitHandler:function(form){
                $("#changeuserinfo_btn").prop('disabled', true);
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
                             // $("#changeuserinfo").trigger('reset');
                             // $(':input').val('');
                             // $('#changeuserinfo_btn').text("Submit");
                             // read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#changeuserinfo_btn").prop('disabled', false);
                    },
                });
            }
    });

});
</script>

<script>
        // function read_data(){

        //   if($.fn.DataTable.isDataTable('#example1')){
        //     $('#example1').DataTable().destroy();
        //   }
        //   $('#example1').DataTable({
        //     processing: true,
        //     language: {
        //         processing: '<span>Processing</span>',
        //     },
        //     serverSide: true,
        //     ajax: '{{ route('read_adminusers') }}',
        //     paging: false,
        //     ordering: false,
        //     autoWidth: false,
        //     sortable: false,
        //     filter: false,
        //     info: false,
        //     dom: 'Blfrtip',
        //     columns: [
        //       { data: "name" },
        //       { data: "email" },
        //       { data: "ipaddress" },
        //       { data: "id" }
        //     ],
        //   });
        // }

        function edit_data(id=null){
            if(id==null || id==""){
              id=$("#search").val();
            }
            $.ajax({
              url: '{{ route('get_userdata') }}',
              type: "POST",
              data: { uid: id },
              cache: false,
              // processData: false,
              // contentType: false,
              success: function(data) {
                $("#epicid").val(data['epicid']);
                $("#valorantid").val(data['valorantid']);
              },
            });
        }

        // function delete_data(id){
        //   $.ajax({
        //     url: '{{ route('remove_admin') }}',
        //     type: "POST",
        //     data: { email: id },
        //     cache: false,
        //     success: function(data) {
        //       if(data!='false'){
        //         toastr.info(data);
        //         read_data();
        //       }
        //       else{
        //         toastr.error('Please Try Again');
        //       }
        //     },
        //   });
        // }
</script>


@endsection()