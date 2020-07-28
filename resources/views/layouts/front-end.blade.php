<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacer-profile</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/teacher-profile.css')}}">


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

    <!--==========================================================-->
    <!------------------------start navbar-------------------------->
    <!--==========================================================-->

   @include('partials.frontend-navbar')
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
                    <div class="main-info">
                        <img src="{{asset('/images/profile-img.webp')}}" alt="">
                        <h1>Ahmed Gomla</h1>
                        <p>You want it done right? Message me</p>
                        <span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span> <span>(165 reviews)</span>
                        <button type="button" class="btn btn-dark-green">Contact ME</button>
                        <hr>
                        <table>
                            <tr>
                                <td><i class="fas fa-map-marker"></i></td>
                                <td>From</td>
                                <td>United States</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i></td>
                                <td>Member since</td>
                                <td>May 2019</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-clock"></i></td>
                                <td>Avg. Response Time</td>
                                <td>2 hours</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-location-arrow"></i></td>
                                <td>Last Delivery</td>
                                <td>6 hours</td>
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
                            
                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>

                        <figure class="col-md-4">
                            <div class="view overlay zoom">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                                <div class="mask flex-center">
                                    <p class="white-text">Zoom effect</p>
                                </div>
                            </div>
                        </figure>
                        </div>

                    </div>
                   </div>
                </div>
            </div>
    </main>
    <!--==========================================================-->
    <!------------------------end sidebar--------------------------->
    <!--==========================================================-->

    <script src="{{asset('/js/main.js')}}"></script>


</body>
</html>