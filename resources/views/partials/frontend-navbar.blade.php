<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

</head>
<body>
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
            <a class="nav-link hover-underline-animation" href="{{ route('teachers.profile') }}">Profile
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teachers.courses') }}">Classroom</a>
            </li>
             <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teacher.course.create') }}">Add course</a>
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
 <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> 
    </script> 
<script type="text/javascript">
      $(document).ready(function () { 




        }); 
</script>

</body>
</html>

