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
                <h3 class="card-title">Content Code Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="codeamount" id="codeamount" action="{{ route('add_codecreators')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Code Name</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" class="form-control" name="name" id="name">
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Code Amount</label>
                    <input type="number" class="form-control" min="0.1" step="any" name="code_amount" id="code_amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Code Creator Type</label>
                        <select class="custom-select " name="codecreatortype" id="codecreatortype">
                          <option value="">Select Creator Type</option>
                          <option value="0">One Time</option>
                          <option value="1">Continuously</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="codeamountadd" class="btn btn-primary">Submit</button>
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
            <h3 class="card-title">Content Code Creates List</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Code Name</th>
                     <th>Code Amount</th>
                     <th>Code Type</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                  <tr>
                     <th>Code Name</th>
                     <th>Code Amount</th>
                     <th>Code Type</th>
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

    $("#codeamount").validate({
       errorClass: 'is-invalid',
        rules: {
            name: {
                required: true
            },
            code_amount: {
                required: true,
            },
            codecreatortype: {
              required:true,
            }
        },
        messages: {
            name: {
                required: "Code Name is required"
            },
            code_amount: {
                required: "Code Amount is required"
            },
            codecreatortype: {
              required: "Code Creator Type is required",
            }
        },
         submitHandler:function(form){
                // $("#codeamountadd").prop('disabled', true);
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
                             $("#codeamount").trigger('reset');
                             $(':input').val('');
                             $('#codeamountadd').text("Submit");
                             read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#codeamountadd").prop('disabled', false);
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
            ajax: '{{ route('read_codecreators') }}',
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
              { data: "ctype" },
              { data: "id" }
            ],
          });

        }
        function edit_data(id){
            $.ajax({
              url: '{{ route('update_codecreators') }}',
              type: "POST",
              data: { uid: id },
              cache: false,
              // processData: false,
              // contentType: false,
              success: function(data) {
                console.log(data);
                $("#id").val(data['id']);
                $("#name").val(data['codecreator_name']);
                $("#code_amount").val(data['codecreator_amount']);
                $("#codecreatortype option[value="+data['codecreator_type']+"]").prop("selected", true);
                $('#gameamountadd').text("Update");
              },
            });
        }

        function delete_data(id){
            $.ajax({
              url: '{{ route('delete_codecreators') }}',
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