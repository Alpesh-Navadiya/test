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
                <h3 class="card-title">Transfer Amount</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="transfer" id="transfer" action="{{ route('add_transferamount')}}" method="post">
                <div class="card-body">
                    <div class="form-group">
                      <label>User Email</label>
                      <input class="form-control typeahead" style="height: auto;" type="text" id="search" name="uname" value="{{$email}}" autocomplete="off" placeholder="Enter User Email">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="number" class="form-control" min="0.01" step="any" name="amount" id="amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add | Withdraw</label>
                    <select class="form-control" name="ttype" id="ttype">
                      <option value="">Select Transfer Type</option>
                      <option value="+">Add</option>
                      <option value="-">Withdraw</option>
                    </select>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="amounttransfer" class="btn btn-primary">Submit</button>
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
            <h3 class="card-title">Admin Transfer List</h3>
         </div>
         <!-- /.card-header -->
         <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Tranfer Email</th>
                     <th>Amount</th>
                     <th>Type</th>
                     <th>Date</th>
                  </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                  <tr>
                    <th>Tranfer Email</th>
                     <th>Admin Account Amount</th>
                     <th>Type</th>
                     <th>Date</th>
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

    $("#transfer").validate({
       errorClass: 'is-invalid',
        rules: {
            uname: {
                required: true,
                email:true
            },
            amount: {
                required: true,
            },
            ttype: {
                required: true,
            }
        },
        messages: {
            uname: {
                required: "User Email is required"
            },
            amount: {
                required: "Amount is required"
            },
            ttype: {
                required: "Transfer Type is required"
            }
        },
         submitHandler:function(form){
                $("#amounttransfer").prop('disabled', true);
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
                             $("#assign").trigger('reset');
                          //    // $(':input').val('');
                             read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#amounttransfer").prop('disabled', false);
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
            ajax: '{{ route('read_transferamount') }}',
            paging: false,
            ordering: false,
            autoWidth: false,
            sortable: false,
            filter: false,
            info: false,
             buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
            ],
            dom: 'Blfrtip',
            columns: [
              { data: "touser" },
              { data: "amount" },
              { data: "type" },
              { data: "date" }
            ],
          });

        }

</script>

<!-- <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script> -->
<script src="{{ url('public/js/typeahead.bundle.js') }}"></script>

<!-- Initialize typeahead.js on the input for search friend -->
<script>
    $(document).ready(function() {
        var bloodhound = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: "{{url('admin/search_user')}}?query=%query",
                wildcard: '%query'
            },
        });

        $('#search').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'users',
            source: bloodhound,
            display: function(data) {
                return data.email //Input value to be set when you select a suggestion.
            },
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Email Not Found</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function(data) {
                  var e="'"+data.email+"'";
                    return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.email +'</div>';
                }
            }
        });
    });
</script>


@endsection()