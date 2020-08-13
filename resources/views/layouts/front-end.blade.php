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
    <style type="text/css">
      /* CSS used here will be applied after bootstrap.css */

.dropdown {
    display:inline-block;
    padding:10px;
  }


.glyphicon-bell {
   
    font-size:1.5rem;
  }

.notifications {
   min-width:420px; 
  }
  
  .notifications-wrapper {
     overflow:auto;
      max-height:250px;
    }
    
 .menu-title {
     color:#ff7788;
     font-size:1.5rem;
      display:inline-block;
      }
 
.glyphicon-circle-arrow-right {
      margin-left:10px;     
   }
  
   
 .notification-heading, .notification-footer  {
  padding:2px 10px;
       }
      
        
.dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {
  
 font-size:1.3rem;
 color:#000;
    
}

.notifications a.content {
 text-decoration:none;
 background:#ccc;

 }
    
.notification-item {
 padding:10px;
 margin:5px;
 background:#ccc;
 border-radius:4px;
 }




    </style>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
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
    <script type="text/javascript">
        const notificationsWrapper = document.querySelector('.dropdown');
        const notificationsToggle    = document.querySelector('a[data-toggle]');
        const notificationsCountElem = notificationsToggle.querySelector('.fa-bell');
        let notificationsCount     = parseInt(notificationsCountElem.innerHTML);
        console.log(notificationsCount);
        const notifications          = notificationsWrapper.querySelector('.notifications-wrapper');
  
        if (notificationsCount <= 0) {
          notificationsCountElem.setAttribute('data-count', 0);
        }
  
        let pusher = new Pusher('6605952789bb2584b6b1', {
          encrypted: true,
          cluster: 'eu',
        });
  
        let channel = pusher.subscribe('new-notification');
  
        channel.bind('App\\Events\\NewNotificationEvent', function(data) {
          const newLi = document.createElement('div');
          newLi.innerHTML = `
            <a class="content" href="#">
                <div class="notification-item">
                    <h4 class="item-title">`+moment().fromNow()+`</h4>
                    <p class="item-info">`+data.message+`</p>
                </div>
            </a>
          `;
          
          notifications.prepend(newLi);
  
          notificationsCount += 1;
          notificationsCountElem.innerHTML = notificationsCount;
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