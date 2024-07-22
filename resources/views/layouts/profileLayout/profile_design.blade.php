<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('public/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ url('public/favicon.ico') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
        <style type="text/css">
        .toast-top-center {
            top: 30%;
            left:50%;
            margin:0 0 0 -150px;
        }
      </style>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public/css/stylee.css')}}">
    <!-- CSS Files -->
    <link href="{{ url('public/account/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- <link href="{{ url('public/account/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet"/> -->

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ url('public/account/demo/demo.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('public/account/css/style.css')}}"rel="stylesheet"/>

    <style>
        .card-user .avatar {
            margin-left: 30%;
        }

        .main-panel .content {
            padding-bottom: 22%;
        }

        [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
            cursor: pointer;
            padding: 3 -px 0px;
            padding-right: 50px;
            padding-left: 50px;
            color: white;
            background-color: #25B5A5;
        }



        .nav-link.active {
            border: 0;
            background: #4daaf2 !important;
            border-radius: 4px;
        }

        .nav-tabs {
            border-bottom: 0;
        }

        li.nav-item {

        }

        li.nav-item a {
            /*font-size: 16px;
            font-weight: 900;*/
        }

        header {
            background: white;
        }

        body.dashboard {
            background-image: linear-gradient(180deg, #2e3857 0%, #212529 100%) !important;
            min-height: 100vh;
        }

        .main {
                margin-top: 120px;
            position: relative;
            background: transparent !important;
        }

        ul#myTab {
            margin-top: 0;

            background: white;
            border-radius: 14px;

            padding: 41px 20px;

        }

        body.dashboard .nav-tabs .nav-item {
            margin-bottom: -1px;
            width: 171px;
            text-align: center;
        }

        body.dashboard a#navbarDropdown:after {
            display: none;
        }

        h6.font-bold.text-base.mb-0 {
            color: black;
        }

        .dropdown-menu.show {
            padding: 15px 10px;
        }

        .dropdown-menu:after {
            display: none !important;
        }

        .dropdown-menu:before {
            display: none !important;
        }

        .relative.text-black-text.py-8.px-10.mb-8.card.text-center {
            padding: 7px 0 35px;
        }

        .game-image {
            width: 150px;
        }

        ul#teams_tabs {
            background: black;
            margin-top: 0;
            padding: 15px 15px;
        }

        div#teams-content {
            padding: 20px;
        }

        .invites-right {
            position: absolute;
            right: 15px;
        }

        .invites-right p {
            text-align: right;
            padding-right: 10px;
            font-weight: 600;
        }

        .card label {
            margin-bottom: 5px;
            color: black;
            font-size: 14px !important;
            font-weight: 600;
        }

        .deposit-tabs .tab-pane {
            width: 50%;
            margin: 0 auto;
        }

        .deposit-tabs {
            background: white;
            padding: 20px;
            border-radius: 9px;

        }

        .deposit-tabs label {
            font-weight: 600;
        }

        .deposit-tabs input {
            border: 0;
            border-radius: 0;
            border-bottom: 1px solid #9A9A9A;
            opacity: 0.5;
        }

        .deposit-tabs ul.nav.nav-tabs.md-tabs.tabs-2 {
            padding: 13px 12px;
            border-radius: 9px;
            width: 39%;
            margin: 0 auto;
        }

        .deposit-tabs ul.list-inline {
            text-align: center;
            margin-bottom: 30px;
        }

        .deposit-tabs ul.list-inline li {
            padding: 21px;
            border-radius: 8px;
            border: 1px solid;
            margin: 0px 11px;
            font-size: 16px;
            width: 20%;
            text-align: center;
            font-weight: 800;
        }

        .tracking-wide {
            letter-spacing: .025em;
            font-size: 16px;
            text-transform: capitalize;
        }

        .locked-balance {

            padding: 20px 0;
        }

        .locked-balance span {
            opacity: 0.5;
        }

        .form-control:focus {
            border: 0;
            box-shadow: none;
            outline: 0 !important;
            color: #66615B;
            border-bottom: 1px solid #9A9A9A;
        }
        .modal{
            top:70px;
        }
        .close{
            display:none;
        }
        .modal-confirm {
        color: #636363;
        width: 400px;
      }
      .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
      }
      .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
      }
      .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
      }
      .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
      }
      .modal-confirm .modal-body {
        color: #999;
      }
      .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
      }
      .modal-confirm .modal-footer a {
        color: #999;
      }
.modal-confirm .icon-box {
        width: 80px;
        
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        
      }
    </style>
    <link rel="stylesheet" href="{{ url('public/css/toastr.css') }}">
   
    <script src="{{ url('public/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ url('public/account/js/core/jquery.min.js')}}"></script>
</head>


<body class="dashboard">
@include('layouts.frontLayout.front_header')

<main>
  @yield('content')

</main>
<!--   Core JS Files   -->
<style type="text/css">
  .navbar-nav .dropdown-menu {
    position: absolute;
    float: none;
  }
  .navbar-nav{
    margin-top: 5px;
  }
  .ml-5, .mx-5 {
    margin-left: 3.5rem!important;
}
</style>
@include('layouts.frontLayout.front_script')


<script src="{{ url('public/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('public/js/additional-methods.min.js') }}"></script>
<script src="{{ url('public/js/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('public/js/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('public/js/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ url('public/js/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('public/account/js/core/popper.min.js')}}"></script>
<script src="{{ url('public/account/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url('public/account/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chart JS -->
<script src="{{ url('public/account/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url('public/account/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url('public/account/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url('public/account/demo/demo.js')}}"></script>
<script src="{{ url('public/js/toastr.js') }}"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>
</html>