@section('title','All Users')
@extends('layouts.adminLayout.admin_design')
@section('content')
<link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/css/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
 <style>.dt-buttons{float:left;color: #000;border-color: #4e555b;    }
.dt-buttons button {border-radius: .30rem !important;background-color: #fff;border-color: #007bff;}
</style>

<!--main-container-part-->

<style type="text/css">

  .transaction{
    border:1px solid Red;
    color: Red;
    padding: 5px;
    margin: 2px;
    background: #fff;
  }
  .transaction:hover{
    border:1px solid #fff;
    color: #fff;
    padding: 5;
    background: Red;
    margin: 2px;
  }
  .admin{
    border:1px solid Green;
    color: Green  ;
    padding: 5px;
    margin: 2px;
    background: #fff;
  }
  .admin:hover{
    border:1px solid #fff;
    color: #fff;
    padding: 5px;
    background: Green;
    margin: 2px;
  }
  .content-creators{
    border:1px solid Blue;
    color: Blue  ;
    padding: 5px;
    margin: 2px;
    background: #fff;
  }
  .content-creators:hover{
    border:1px solid #fff;
    color: #fff;
    padding: 5px;
    background: Blue;
    margin: 2px;
  }
  .amount{
    border:1px solid Grey;
    color: Grey  ;
    padding: 5px;
    margin: 2px;
    background: #fff;
  }
  .amount:hover{
    border:1px solid #fff;
    color: #fff;
    padding: 5px;
    background: Grey  ;
    margin: 2px;
  }
  .details{
    border:1px solid #ff8a25;
    color: #ff8a25  ;
    padding: 5px;
    margin: 2px;
    background: #fff;
  }
  .details:hover{
    border:1px solid #fff;
    color: #fff;
    padding: 5px;
    background: #ff8a25  ;
    margin: 2px;
  }
  .last_td{
    width: 35%;
  }
  .last_td > a{
    width: auto;
    display: inline-block;
  }
</style>
<!--end-main-container-part-->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Epicid</th>
                    <th>Valorantid</th>
                    <th>Epic Profileid</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $val)
                    <tr>
                        <?php
$role = $val->role;

$afunc = "remove_admin('" . $val->email . "')";
$atext = "Remove Admin";
$ch = "javascript:void(0)";

?>
                        <td>{{ $val->name}}</td>
                        <td>{{ $val->email}}</td>
                        <td>{{ $val->epicid}}</td>
                        <td> {{ $val->valorantid}}</td>
                        <td>{{ $val->epic_profile_id}}</td>
                        <td class="last_td">
                          <a class="transaction" href="{{ url('/admin/alltransaction')}}/{{ $val->email }}">Transaction</a>
                          <?php if ($role == "0") {?>
                            <a class="admin" href="{{ url('/admin/createadminview')}}/{{ $val->email }}">Assign Admin</a>
                          <?php } else {?>
                            <a class="admin" href="<?php echo $ch; ?>" onclick="<?php echo $afunc; ?>"><?php echo $atext; ?></a>
                          <?php }?>

                          <a class="amount" href="{{ url('/admin/transferamount')}}/{{ $val->email }}">Amount Transfer</a>
                          <a class="content-creators" href="{{ url('/admin/contentcreators')}}/{{ $val->email }}">Add Content Creators</a>
                          <a class="details" href="{{ url('/admin/createuserdetailsview')}}/{{ $val->email }}">Update</a>
                        </td>
                    </tr>
                  @endforeach()

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Epicid</th>
                    <th>Valorantid</th>
                    <th>Epic Profileid</th>
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
      </div>
       /.container-fluid -->
    </section>
    <script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/html5.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/vfs_fonts.js')}}"></script><script>
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

function assign_admin(email){
    $.ajax({
      url: '{{ route('assign_admin') }}',
      type: "POST",
       data: { email: email },
      cache: false,
      success: function(data) {
        if(data!='false'){
          toastr.info(data);
        }
        else{
          toastr.error('Please Try Again');
        }
      },
    });
}
function remove_admin(email){
    $.ajax({
      url: '{{ route('remove_admin') }}',
      type: "POST",
       data: { email: email },
      cache: false,
      success: function(data) {
        if(data!='false'){
          toastr.info(data);
        }
        else{
          toastr.error('Please Try Again');
        }
      },
    });
}

</script>
@endsection()