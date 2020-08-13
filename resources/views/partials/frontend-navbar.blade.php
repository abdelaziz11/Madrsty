<nav class="nav navbar navbar-expand-lg navbar-light navbar-default sticky-top"  role="navigation" >

<div class="container" style="color: white;">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="{{asset('/images/logo-blue.png ')}}" width="150px" alt="logo"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        @if(Auth::guard('teacher')->check())
        <ul class="navbar-nav mr-auto" id="aa">
            <li class="nav-item  ">
            <a class="nav-link hover-underline-animation" href="{{ route('teachers.profile') }}">Profile
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teachers.courses') }}">Classroom</a>
            </li>

               <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teachers.schedule') }}">schedule</a>
            </li>

             <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teacher.course.create') }}">Add course</a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav mr-auto" id="aa">
            <li class="nav-item  ">
            <a class="nav-link hover-underline-animation" href="{{ route('student.home') }}">Profile
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('student.courses') }}">Classroom</a>
            </li>

               <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('student.week.course.lectures') }}">schedule</a>
            </li>
        </ul>
        @endif
        <!-- Links -->

        @if(Auth::check())
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="dropdown dropdown-notifications">
                    <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                    <i data-count="{{Auth::User()->unreadNotifications->count()}}" class="glyphicon glyphicon-bell notification-icon"></i>
                    </a>
    
                    <div class="dropdown-container">
                    <div class="dropdown-toolbar">
                        <div class="dropdown-toolbar-actions">
                        <a href="#">Mark all as read</a>
                        </div>
                    <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">{{ Auth::User()->unreadNotifications->count() }}</span>)</h3>
                    </div>
                    <ul class="dropdown-menu">
                        @foreach(Auth::User()->unreadNotifications as $notification)
                        <li class="notification active">
                            <div class="media">
                                <div class="media-left">
                                <div class="media-object">
                                    <img src="https://api.adorable.io/avatars/71/a.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                                </div>
                                </div>
                                <div class="media-body">
                                <strong class="notification-title">{{ $notification['data']['message']}}</strong>
                                <!--p class="notification-desc">Extra description can go here</p-->
                                <div class="notification-meta">
                                    <small class="timestamp">{{ $notification->created_at->diffForHumans() }}</small>
                                </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="dropdown-footer text-center">
                        <a href="#">View All</a>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
          @endif
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        <a href="javascript:void" onclick="$('#logout-form').submit();">
    Logout
</a>     
    </div>
    <!-- Collapsible content -->

</div>
</nav>

