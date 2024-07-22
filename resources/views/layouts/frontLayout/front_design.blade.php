<!DOCTYPE html>
<html lang="en">
   <head>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149121343-3"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'UA-149121343-3');
      </script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Play Fortnite for real money by placing wagers. Easy matchmaking!">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="canonical" href="https://www.loyalwagers.com" />
      <link rel="shortcut icon" href="{{ url('public/favicon.ico') }}" />
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">

      <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="{{ url('public/css/style.min.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">
      <!-- <link rel="stylesheet" href="{{ url('public/css/filter.css') }}"> -->
      <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ url('public/css/mdb.min.css') }}">
      <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
      <link rel="stylesheet" href="{{ url('public/css/toastr.css') }}">

      <script src="{{ url('public/js/jquery-3.5.1.js') }}"></script>


      <title>@yield('title')</title>
      <style type="text/css">
      .teambtn {
    font-size: 13px !important;
}
        .toast-top-center {
          top: 30%;
          left:50%;
          margin:0 0 0 -150px;
      }
      </style>
   </head>
<body>
@include('layouts.frontLayout.front_header')

<main>
  @yield('content')

</main>
@include('layouts.frontLayout.front_footer')
  @include('layouts.frontLayout.front_script')


</body>
</html>