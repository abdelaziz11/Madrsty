<nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top"  role="navigation" >

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
                <li class="nav-item active ">
                <a class="nav-link hover-underline-animation" href="{{ route('teachers.profile', app()->getLocale()) }}">{{ __('site.Profile') }}
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="{{ route('teachers.courses', app()->getLocale()) }}">{{ __('site.Classroom') }}</a>
                </li>
    
                   <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="{{ route('teachers.schedule', app()->getLocale()) }}">{{ __('site.schedule') }}</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="{{ route('teacher.course.create', app()->getLocale()) }}">{{ __('site.Add Course') }}</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="/ar">{{ __('site.ar') }}</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link hover-underline-animation" href="/en">{{ __('site.en') }}</a>
                </li>
    
            </ul>
            <!-- Links -->
    
            <form class="form-inline">
                <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="{{ __('site.search') }}" aria-label="Search">
                </div>
            </form>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            <a href="javascript:void" onclick="$('#logout-form').submit();">
        {{ __('site.logout') }}
    </a>     
        </div>
        <!-- Collapsible content -->
    
    </div>
    </nav>
    
    