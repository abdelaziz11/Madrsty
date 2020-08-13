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
                 <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="{{ route('teacher.course.create') }}">Add course</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                        <i class="fas fa-bell">
                            @if(Auth::User()->unreadNotifications)
                                {{ Auth::User()->unreadNotifications->count() }}
                            @else
                                0
                            @endif
                        </i>
                    </a>
                
                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">
                        <div class="notification-heading"><h4 class="menu-title">Notifications</h4><h4 class="menu-title pull-right">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                        </div>
                        <li class="divider"></li>
                            <div class="notifications-wrapper">
                                @if(Auth::User()->unreadNotifications)
                                    @foreach(Auth::User()->unreadNotifications as $notification)
                                        <a class="content" href="#">
                                            <div class="notification-item">
                                                <h4 class="item-title">{{ $notification->created_at->diffForHumans() }}</h4>
                                                <p class="item-info">{{ $notification['data']['message']}}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif

                            </div>
                        <li class="divider"></li>
                        <div class="notification-footer"><h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
                    </ul>
                </li>
    
    
            
            </ul>
            <!-- Links -->
    
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
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