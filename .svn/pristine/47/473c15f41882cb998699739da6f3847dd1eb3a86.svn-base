@section('title','Live Wagers')
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
                <h3 class="card-title">On Going Wager</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Mode</th>
                    <th>Amount</th>
                    <th>Balance</th>
                    <th>Time</th>
                  </tr>
                  </thead>
                  <tbody>         
                  @foreach($alltransaction as $trans)
                    <tr>
                    <td>{{ $trans->mode }}</td>
                <td>{{ $trans->amount }}</td>
                <td>{{ $trans->balance }}</td>
                <td>{{ $trans->created_at }}</td>
                    </tr>
                  @endforeach() 
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>Mode</th>
                      <th>Amount</th>
                      <th>Balance</th>
                      <th>Time</th>
                  </tr>
                  </tfoot>
                </table>
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