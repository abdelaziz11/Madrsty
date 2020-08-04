@extends('layouts.front-end')

@section('title')
Course's Questions
@endsection

@section('style')



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/teacher-profile.css')}}">

@endsection

    <!--==========================================================-->
    <!------------------------start navbar-------------------------->
    <!--==========================================================-->
@section('content')

    <!--==========================================================-->
    <!--------------------------end navbar-------------------------->
    <!--==========================================================-->


    <!--==========================================================-->
    <!------------------------start sidebar------------------------->
    <!--==========================================================-->
    <main class="teacher-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 xs-12">
                    <div class="main-info" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
">
                        <img src="{{asset('/images/profile-img.webp')}}" alt="">
                        <h1>{{ $teacher->name }}</h1>
                                                <br>
                       <table style="margin-right: 10px;">
                            <tr>
                                <td><i class="fas fa-map-marker"></i></td>
                                <td>subject</td>
                                <td>{{$teacher_subjects->name}}</td>
                            </tr>
                             <tr>
                                <td><i class="fas fa-clock"></i></td>
                                <td>Total students</td>
                                <td>{{$totalStudents}}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i></td>
                                <td>Member since</td>
                                <td>{{$teacher->created_at}}</td>
                            </tr>
                           
                       
                        </table>
                    </div>
                    <div class="more-info">
                        <h5>Description</h5>
                        <p>There's a deep, engaging voice you're looking for. It's powerful, yet gentle. You can hear it. In addition to being a singer-songwriter and author, I narrate audiobooks and voice projects for folks like you. I find great honor in delivering flawless work, no matter how big or small the project. You'll notice I can eliminate my natural southern accent, if it doesn't fit the project. And if you need a soft, southern affect, I'm your guy. Lastly, as a highly educated man and a member of Mensa, your more advanced vocabulary is safe in my hands...or mouth as it were.</p>
                        <hr>
                        <h5>Languages</h5>
                        <p>English  - Arabic</p>
                        <hr>
                        <h5>Linked Accounts</h5>
                        <p><i class="fab fa-twitter"></i> twitter</p>
                        <hr>
                        <h5>Skills</h5>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        <button class="btn btn-outline-blue-grey">my skills</button>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 xs-12">
                   <div class="courses">
                    <h1>MY COURSES</h1>
                    <div class="mdb-lightbox">
                        <div class="row">
                        @foreach($courses as $course)    
                            <figure class="col-md-4">
                                <div class="view overlay zoom">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                    <div class="mask flex-center">
                                        <p class="white-text">{{ $course->name }}</p>
                                    </div>
                                </div>
                            </figure>
                        @endforeach

                        </div>

                    </div>
                   </div>
                </div>
            </div>
    </main>
    <!--==========================================================-->
    <!------------------------end sidebar--------------------------->
    <!--==========================================================-->
@endsection
