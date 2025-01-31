<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ url('public/favicon.ico') }}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('public/css/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('public/css/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/css/backend/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><img src="{{ url('public/assets/loyalwagers_logo.png')}}" alt="image"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     
    <center> <h2 style="color:#4290fc">LOGIN </h2> </center>
      <div class="alert alert-info" id="msg" style='display:none;'>
            <!-- <a class="close" data-dismiss="alert">×</a> -->
            <strong>Heads Up!</strong> Something wrong
        </div>
          
        <form id="loginform" class="form-vertical" method="post" action="{{ url('loginProcess')}}">
        <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-checkbox">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
     
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="{{ url('public/js/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/js/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/js/backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{ url('public/js/backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<script type="text/javascript">
   $(document).ready(function(){
        $('#loginform').validate({
            rules:{
                email:{
                    required:true,
                       email: true

                },
                password:{
                    required:true
                }
                
            },
            messages:{
                email:{
                    required:"Please enter email.",
                    email:"Enter Valid email"
                 },
                password:{
                    required:"Please enter password."
                     }
            
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
                     
                             if(data == 'yes') {
                           window.location.href = "{{ url('admin/dashboard') }}";
                         }
                         else if(data == 'No') {
                         
                            $('#msg').show();
                         }
                    },
                    
                });
            }
        })
    //Login form validation
}); 
</script>

</body>
</html>
