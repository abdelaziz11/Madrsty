<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/teacher-profile.css')}}">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

    @yield('style')


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>



<body >

    <!--==========================================================-->
    <!------------------------start navbar-------------------------->
    <!--==========================================================-->

<div id="nav" style="display: none;">
   @include('partials.frontend-navbar')
   </div>
    <!--==========================================================-->
    <!--------------------------end navbar-------------------------->
    <!--==========================================================-->
<div class="wrapper" id="loading" style="  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;">
  <div class="cover"></div>
  <div class="page"></div>
  <div class="inner-border"></div>
 
</div>     

<div id="content" style="display: none;">
    @yield('content')
</div>
    <!--==========================================================-->
    <!------------------------start sidebar------------------------->
    <!--==========================================================-->
    
    <!--==========================================================-->
    <!------------------------end sidebar--------------------------->
    <!--==========================================================-->

    <!-- <script src="{{asset('/js/main.js')}}"></script> -->
    @yield('scripts')
<script type="text/javascript">
    $( document ).ready(function() {
        new WOW().init();
        setTimeout(function() { 
       $('#nav').show()
       $('#loading').hide()
       $('#content').show()
    }, 1000);

       
    });

</script>
</body>
</html>