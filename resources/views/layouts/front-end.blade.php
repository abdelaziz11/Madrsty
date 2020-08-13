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
    {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-notifications.min.css')}}">

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
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
 <script type="text/javascript">
      const notificationsWrapper = document.querySelector('.dropdown-notifications');
      const notificationsToggle    = document.querySelector('a[data-toggle]');
      const notificationsCountElem = notificationsToggle.querySelector('i[data-count]');
      let notificationsCount     = parseInt(notificationsCountElem.getAttribute('data-count'));
      const notifications          = notificationsWrapper.querySelector('ul.dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsCountElem.setAttribute('data-count', 0);
      }

      // Enable pusher logging - don't include this in production
      // Pusher.logToConsole = true;

      let pusher = new Pusher('6605952789bb2584b6b1', {
        encrypted: true,
        cluster: 'eu',
      });

      // Subscribe to the channel we specified in our Laravel Event
      let channel = pusher.subscribe('status-liked');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\NewNotificationEvent', function(data) {
        const existingNotifications = notifications.innerHTML;
        // var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        const newLi = document.createElement('li');
        newLi.innerHTML = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/a.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.message+`</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">`+moment().fromNow()+`</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        
        notifications.prepend(newLi);

        notificationsCount += 1;
        notificationsCountElem.setAttribute('data-count', notificationsCount);
        notificationsWrapper.querySelector('.notif-count').textContent = notificationsCount;
      });
    </script>
<script type="text/javascript">
    $( document ).ready(function() {
        new WOW().init();
        setTimeout(function() { 
       $('#nav').show()
       $('#loading').hide()
       $('#content').show()
    }, 1000);

         $('nav a[href^="' + location.pathname.split("/")[1] + '"]').addClass('active');

    });

</script>
</body>
</html>