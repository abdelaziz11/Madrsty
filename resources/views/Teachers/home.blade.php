<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Treclon</title>
        {{-- <link href=" {{ mix('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('/css/teacher-profile.css') }}" >
        {{-- <link rel="stylesheet" href="{{ asset('css/teacher-courses.css') }}"> --}}

            <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
        <input type="hidden" id="id" value="{{ Auth::User()->id }}">
        <input type="hidden" id="name" value="{{ Auth::User()->name }}">
        <input type="hidden" id="email" value="{{ Auth::User()->email }}">
        <input type="hidden" id="subject_id" value="{{ Auth::User()->subject_id }}">
        {{-- <script src="{{ mix('js/bootstrap.js') }}"></script> --}}
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdn.rawgit.com/nnattawat/flip/v1.1.2/dist/jquery.flip.min.js"></script>
        <script>
            localStorage.setItem('id' , $('#id').val())
            localStorage.setItem('name' , $('#name').val())
            localStorage.setItem('email',$('#email').val())
            localStorage.setItem('subject_id' , $('#subject_id').val())
        </script>
    </body>
</html>
