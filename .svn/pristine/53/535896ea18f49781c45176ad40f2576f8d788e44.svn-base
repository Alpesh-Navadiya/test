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
                <h3 class="card-title">Game Amount</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="gameamount" id="gameamount" action="{{ route('add_amount')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Game Amount</label>
                        <input type="hidden" name="id" id="id">
                        <input type="number" class="form-control" min="0.01" step="any" name="amount" id="amount" onchange="set_prize()">
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Game Prize</label>
                    <input type="number" class="form-control" min="0.01" step="any" name="prize" id="prize" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Withdrawal Fees</label>
                    <input type="number" class="form-control" min="0.01" step="any" name="our_fees" id="our_fees" value="0.20">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="gameamountadd" class="btn btn-primary">Submit</button>
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
            <h3 class="card-title">Game Amount List</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Game Amount</th>
                     <th>Game Prize</th>
                     <th>Withdrawal Fees</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                  <tr>
                      <th>Game Amount</th>
                     <th>Game Prize</th>
                     <th>Withdrawal Fees</th>
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

    $("#gameamount").validate({
       errorClass: 'is-invalid',
        rules: {
            amount: {
                required: true
            },
            prize: {
                required: true,
            }
        },
        messages: {
            amount: {
                required: "Game Amount is required"
            },
            prize: {
                required: "Game Prize is required"
            }
        },
         submitHandler:function(form){
                $("#gameamountadd").prop('disabled', true);
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
                             $("#gameamount").trigger('reset');
                             $(':input').val('');
                             $('#gameamountadd').text("Submit");
                             read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#gameamountadd").prop('disabled', false);
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
            ajax: '{{ route('read_amount') }}',
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
              { data: "fees" },
              { data: "id" }
            ],
          });

        }
        function edit_data(id){
            $.ajax({
              url: '{{ route('update_amount') }}',
              type: "POST",
              data: { uid: id },
              cache: false,
              // processData: false,
              // contentType: false,
              success: function(data) {
                $("#id").val(data['id']);
                $("#amount").val(data['amount']);
                $("#id").val(data['id']);
                $("#prize").val(data['prize']);
                $("#our_fees").val(data['our_fees']);

                $('#gameamountadd').text("Update");
              },
            });
        }

        function delete_data(id){
            $.ajax({
              url: '{{ route('delete_amount') }}',
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


        function set_prize(){
          var setted_amt=$("#amount").val();
          var set_prize=parseFloat((setted_amt*1.8)).toFixed(2);
          // set_prize=(parseFloat(set_prize)+parseFloat(setted_amt)).toFixed(2);
          $("#prize").val(set_prize);
        }
</script>


@endsection()