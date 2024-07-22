@section('title','Dashboard')
@extends('layouts.adminLayout.admin_design')
@section('content')
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
                <h3 class="card-title">Paypal Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="paypaladdsettings" id="paypaladdsettings" action="{{ route('add_paypal')}}" method="post">
                <div class="card-body">
                  <div class="form-group">
                        <label>Paypal Id</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" class="form-control" name="paypal_id" id="paypal_id">
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Paypal Client ID</label>
                    <input type="text" class="form-control" name="paypal_client_id" id="paypal_client_id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Paypal Secrate Key</label>
                    <input type="text" class="form-control" name="paypal_secrate_key" id="paypal_secrate_key">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="paypaladd" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
</section>



<script type="text/javascript">
  $(document).ready(function () {

    read_data();

    $("#paypaladdsettings").validate({
       errorClass: 'is-invalid',
        rules: {
            paypal_id: {
                required: true
            },
            paypal_client_id: {
                required: true
            },
            paypal_secrate_key: {
                required: true
            },
        },
        messages: {
            paypal_id: {
                required: "Paypal Id is required"
            },
            paypal_client_id: {
                required: "Paypal Client Id is required"
            },
            paypal_secrate_key: {
                required: "Paypal Secrate Key is required"
            },
        },
         submitHandler:function(form){
                $("#paypaladd").prop('disabled', true);
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
                             $('#paypaladd').text("Submit");
                             read_data();
                          }
                          else{
                            toastr.error('Please Try Again');
                          }
                          $("#paypaladd").prop('disabled', false);
                    },
                });
            }
    });

});
</script>

<script>
        function read_data(){
            $.ajax({
              url: '{{ route('read_paypal') }}',
              type: "GET",
              cache: false,
              success: function(data) {
                $("#id").val(data['id']);
                $("#paypal_id").val(data['paypalid']);
                $("#paypal_client_id").val(data['paypalclientid']);
                $("#paypal_secrate_key").val(data['paypalsecratekey']);
                $('#paypaladd').text("Update");
              },
            });
        }
</script>


@endsection()