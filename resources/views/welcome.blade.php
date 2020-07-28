<!DOCTYPE html>
<html>

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
    {{-- <link rel="stylesheet" href="../../css/teacher-profile.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/teacher-profile.css') }}" >


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

    <!---------------------------------------------------start of header-------------------------------------------->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top" role="navigation">

        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/logo.png" width="150px" alt="logo"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <a class="nav-link hover-underline-animation" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="#">teacher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="#">Pricing</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link  hover-underline-animation" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </div>
    </nav>
    <!--/.Navbar-->
    <!---------------------------------------------------end of navbar---------------------------------------------->
    <!---------------------------------------------------start of header---------------------------------------------->


    <div class="header">
        <video class="video-fluid z-depth-1" autoplay loop controls muted>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas a amet iure quod corporis dolorem sed
                obcaecati explicabo cumque tempora in atque quam, perspiciatis quia. Nostrum mollitia quasi iste
                corporis!</p>

            <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
        </video>

        <!-- Optional: some overlay text to describe the video -->
        <div class=" banner-text agileinfo">
            <div class="container">
                <div class="agile_banner_info">
                    <div class="agile_banner_info1">
                        <h6>online education for you</h6>
                        <div id="typed-strings" class="agileits_w3layouts_strings">
                            <p>Welcome to<i> our website </i></p>
                            <p>tawakl <i> tech</i></p>
                            <p> stack team <i> developer</i></p>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-text -->

    </div>
    <!---------------------------------------------------end of header---------------------------------------------->
    <!---------------------------------------------------start of cards---------------------------------------------->


    <div class="cards">

        <div class="container">

            <div class="row">
                <div class="col-md-4 col-xs-12 mb-4 f-card wow animated bounceInLeft slow">
                    <!-- Card -->
                    <div class="card ">

                        <!-- Background color -->
                        <div class="card-up ">

                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img class=""
                                    src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/col-service-1.png">
                                <span>Online Courses</span>
                            </div>

                            <!-- Content -->
                            <div class="card-body f-body">
                                <!-- Name -->
                                <h4 class="card-title">Anna Doe</h4>
                                <hr>
                                <!-- Quotation -->
                                <p> <i class="fas fa-quote-left"></i> Join the community of modern thinking students.
                                    Highly qualified teacher and millions of people learning . <i
                                        class="fas fa-quote-left"></i></p>
                                <button class="btn hover-underline-animation">LEARN MORE</button>
                            </div>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <div class="col-md-4 col-xs-12 mb-4 s-card wow animated bounceInDown slow">
                    <!-- Card -->
                    <div class="card ">

                        <!-- Background color -->
                        <div class="card-up  lighten-1">

                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img
                                    src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/col-service-2.png">
                                <span>Online Courses</span>
                            </div>

                            <!-- Content -->
                            <div class="card-body s-body">
                                <!-- Name -->
                                <h4 class="card-title">Anna Doe</h4>
                                <hr>
                                <!-- Quotation -->
                                <p> <i class="fas fa-quote-left"></i> Join the community of modern thinking students.
                                    Highly qualified teacher and millions of people learning . <i
                                        class="fas fa-quote-left"></i></p>
                                <button class="btn hover-underline-animation">LEARN MORE</button>
                            </div>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <div class="col-md-4 col-xs-12 mb-4 wow animated bounceInRight slow" >
                    <!-- Card -->
                    <div class="card ">

                        <!-- Background color -->
                        <div class="card-up  lighten-1">

                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img
                                    src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/col-service-3.png">
                                <span>Online Courses</span>
                            </div>

                            <!-- Content -->
                            <div class="card-body t-body">
                                <!-- Name -->
                                <h4 class="card-title">Anna Doe</h4>
                                <hr>
                                <!-- Quotation -->
                                <p> <i class="fas fa-quote-left"></i> Join the community of modern thinking students.
                                    Highly qualified teacher and millions of people learning . <i
                                        class="fas fa-quote-left"></i></p>
                                <button class="btn hover-underline-animation">LEARN MORE</button>
                            </div>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
            </div>

        </div>
    </div>



    <!---------------------------------------------------end of cards---------------------------------------------->
    <!-----------------------------------------------strat of courses-paragraph------------------------------------>
    <div class="courses-p">

        <div class="container-fluid">
            <div class="title">
                <p c>The world’s largest selection of courses</p>
                <h1>Choose from over 2,500 online video courses <br>with new additions published every month.</h1>
            </div>
            <div class="row  ">
                <div class="col-md-6 col-sm-12 wow animated fadeInRight">
                    <p>Accredited by the Distance Education Accrediting Commission (DEAC) and partnered with top
                        universities worldwide, Kingster offers degree programs in Business Administration, Computer
                        Science, Health Science, Education and more. Kingster offers degree programs.</p>
                </div>
                <div class="col-md-6 col-sm-12 wow animated fadeInLeft">
                    <p class="pb-5">Millions of people have used Kingster to decide which online course to take. We
                        aggregate courses from many universities to help you find the best courses on almost any
                        subject, wherever they exist. Our goal is to make online education work for everyone.</p>
                    <i class="fa fa-play-circle"></i> <a href="#">WATCH OUR PRESENTATION</a>
                </div>
            </div>

        </div>
    </div>
    <!-----------------------------------------------end of courses-paragraph------------------------------------>
    <!---------------------------------------------------strat of search----------------------------------------->
    <div class="search">
        <div class="container-fluid">
            <h2>Search online courses</h2>

            <form action="" class="form-inline" style="justify-content: center;">
                <div class="row">
                        <select class="mdb-select md-form form-control" searchable="Search here..">
                            <option value="" disabled selected>CATEGORIES</option>
                            <option value="1">ACOUUNTIND</option>
                            <option value="2">DESIGN</option>
                            <option value="3">DEVELOPMENT</option>
                            <option value="4">DESKTOP</option>
                        </select>
                        <div class="search-input">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search"
                                style="width: 100%;">
                        </div>
                        <button type="button" class="btn btn-success">SEARCH</button>
                </div>
            </form>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 mb-3">
                    <div class="content">
                        <img src="images/search-icon-1.png" alt="">
                        <h3>Trusted by over 1,200 students and teachersv</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-3">
                    <img src="images/search-icon-2.png" alt="">
                    <h3>Over 2,500 online courses available every day</h3>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-3">
                    <img src="images/search-icon-3.png" alt="">
                    <h3>Our students come from every country in the world</h3>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-3">
                    <img src="images/search-icon-4.png" alt="">
                    <h3>Our team is devoted to transforming education</h3>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------------end of search----------------------------------------->
    <!----------------------------------------------start of Featured-courses---------------------------------->

    <div class="Featured-courses">
        <div class="container-fluid">
            <div class="row" style="justify-content: space-between;">
                <h4 class="float-left">Featured courses</h4>
                <a class="float-right" href="" style="margin: 60px;">VIEW ALL COURSES <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-1.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>DESIGN</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Introduction to Architecture</h3>
                        <!-- Text -->


                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-2.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Graphic</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Photoshop CC 2019 MasterClass</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-3.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Accounting </a> ,
                                <a>Business</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>The Business Intelligence Analyst</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-4.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Marketing</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Organic Online Marketing and SEO</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------end of Featured-courses----------------------------------->
    <!------------------------------------------------start of last-courses------------------------------------>
    <div class="Featured-courses" style="padding-top: 0 ;">
        <div class="container-fluid">
            <div class="row" style="justify-content: space-between;">
                <h4 class="float-left">Latest courses</h4>
                <a class="float-right" href="" style="margin: 60px;">VIEW ALL COURSES <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-1.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>DESIGN</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Introduction to Architecture</h3>
                        <!-- Text -->


                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-2.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Graphic</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Photoshop CC 2019 MasterClass</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-3.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Accounting </a> ,
                                <a>Business</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>The Business Intelligence Analyst</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="card booking-card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="images/feature-course-4.jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title"></div>
                            <span class="card-title font-weight-bold float-left"><a>Marketing</a></span>
                            <span class="float-right">
                                <ul class="list-unstyled list-inline rating mb-0">
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                                </ul>
                            </span>
                        </div>
                        <!-- Data -->
                        <h3>Organic Online Marketing and SEO</h3>
                        <!-- Text -->

                        <div class="card-footer">
                            <span>$70.00 </span> <span class="float-right"><i class="fa fa-bookmark"></i></span>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------------end of last-courses---------------------------------->
    <!--------------------------------------------start of quality-meets--------------------------------->
    <div class="quality-meets">
        <div class="container-fluid">
            <h3>Accredited by the Distance Education Accrediting Commission</h3>
            <h1>Quality meets online degree programs</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div id="container">
                        <div id="inner">
                            <div class="view overlay ">
                                <img src="images/feature-course-2.jpg" class="img-fluid demo-img" alt="smaple image" width="100%">
                                <h4 class="title">LEARNING</h4>

                                <div class="mask ">
                                    <h4 class="d-block demo-img">LEARNING </h4>
                                    <div class="content ">
                                        <p>We offer degree programs in Business Administration</p>
                                        <button type="button" class="btn btn-success ">LEARN MORE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div id="container1">
                        <div id="inner1">
                            <div class="view overlay ">
                                <img src="images/feature-course-3.jpg" class="img-fluid demo-img" alt="smaple image" width="100%">
                                <h4 class="title">Consulting</h4>

                                <div class="mask ">
                                    <h4 class="d-block demo-img">Consulting </h4>
                                    <div class="content ">
                                        <p>We offer degree programs in Business Administration</p>
                                        <button type="button" class="btn btn-success ">LEARN MORE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div id="container2">
                        <div id="inner2">
                            <div class="view overlay ">
                                <img src="images/feature-course-1.jpg" class="img-fluid demo-img" alt="smaple image" width="100%">
                                <h4 class="title">Coaching</h4>

                                <div class="mask ">
                                    <h4 class="d-block demo-img">Coaching </h4>
                                    <div class="content ">
                                        <p>We offer degree programs in Business Administration</p>
                                        <button type="button" class="btn btn-success ">LEARN MORE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button type="button" class="btn btn-outline-primary waves-effect">ALL CATEGORIES</button>

        </div>

    </div>
    <!----------------------------------------------end of quality-meets---------------------------------->
    <!------------------------------------------------start of counter------------------------------------>
    <div class="counter">
        <div class="container">
            <div class="row">
                <h6>Improving Lives Through Learning </h6>
                <p>The leading global marketplace for learning and instruction. By connecting students all over the world to the best instructors, Kingster is helping individuals reach their goals and pursue their dreams.</p>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
            <div class="content">
                <div class="title">
                    <p><span>Connecting students</span> everywhere to the world’s best instruction <span>anywhere.</span></p>
                </div>
                <div class="row bg-img">
                    <div class="col-md-4 col-sm-6">
                        <span class="number-counter" data-count-from="0" data-count-to="1000" data-count-speed="20"></span>+
                        <h4>HAPPY STUDENT</h4>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <span class="number-counter" data-count-from="0" data-count-to="100" data-count-speed="20"></span>%
                        <h4>Satisfaction</h4>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <span class="number-counter" data-count-from="0" data-count-to="500" data-count-speed="20"></span>+
                        <h4>ONLINE COURSE</h4>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!------------------------------------------------end of counter------------------------------------>
    <!-------------------------------------------------start of news------------------------------------>
    <div class="news">
        <div class="container">

           <div class="title row"style="margin: 0 0 50px 0;justify-content:space-between">
               <div class="col-md-9 ">
                    <p>Discover our latest news and insights</p>
                    <h1>Find out the latest education news</h1>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-outline-primary waves-effect">LATEST NEWS</button>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <!-- Card -->
                    <div class="card ">

                        <!-- Card image -->
                        <div class="card-img view overlay zoom">
                            <img class="card-img-top img-fluid" src="images/news-1.jpg" alt="Card image cap">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title">
                                <span class="card-title font-weight-bold float-left">June 6, 2016</span>
                                <span class="float-right">
                                    Admission, Student
                                </span>
                            </div>
                           <h4>Professor Albert joint research on mobile money in Tanzania</h4>
                        </div>
                        <div class="card-footer">
                            <span><a href="">READ MORE</a></span>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <!-- Card -->
                    <div class="card ">

                        <!-- Card image -->
                        <div class="card-img view overlay zoom">
                            <img class="card-img-top img-fluid" src="images/news-2.jpg" alt="Card image cap">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title">
                                <span class="card-title font-weight-bold float-left">June 6, 2016</span>
                                <span class="float-right">
                                    Admission, Student
                                </span>
                            </div>
                           <h4>Professor Albert joint research on mobile money in Tanzania</h4>
                        </div>
                        <div class="card-footer">
                            <span><a href="">READ MORE</a></span>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <!-- Card -->
                    <div class="card ">

                        <!-- Card image -->
                        <div class="card-img view overlay zoom">
                            <img class="card-img-top img-fluid" src="images/news-3.jpg" alt="Card image cap">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <div class="title">
                                <span class="card-title font-weight-bold float-left">June 6, 2016</span>
                                <span class="float-right">
                                    Admission, Student
                                </span>
                            </div>
                           <h4>Professor Albert joint research on mobile money in Tanzania</h4>
                        </div>
                        <div class="card-footer">
                            <span><a href="">READ MORE</a></span>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------end of news------------------------------------>
    <!---------------------------------------------strat of services--------------------------------->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                    <img src="images/icon-col-service-1.webp" alt="">
                    <h2>Online Courses</h2>
                    <p>Millions of people have used Kingster to decide which online course to take.</p>
                    <span>LEARN MORE <i class="fa fa-chevron-right"></i></span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                    <img src="images/icon-col-service-2.webp" alt="">
                    <h2>Teaching Material</h2>
                    <p>Millions of people have used Kingster to decide which online course to take.</p>
                    <span>LEARN MORE <i class="fa fa-chevron-right"></i></span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                    <img src="images/icon-col-service-3.webp" alt="">
                    <h2>University Life</h2>
                    <p>Millions of people have used Kingster to decide which online course to take.</p>
                    <span>LEARN MORE <i class="fa fa-chevron-right"></i></span>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                    <img src="images/icon-col-service-4.webp" alt="">
                    <h2>Academic Programs</h2>
                    <p>Millions of people have used Kingster to decide which online course to take.</p>
                    <span>LEARN MORE <i class="fa fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------end of services--------------------------------->


    <!---------------------------------------------start of footer--------------------------------->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <a  href="#"><img src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/logo.png" width="150px" alt="logo"></a>
                    <p>We aggregate courses from many universities to help you find the best courses on almost any subject, wherever they exist.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <h5 href="">Contacts</h5>
                    <p>Mon – Fri: 8.00am 6.00pm

                        112 W 34th St, New York

                        (+1) 212-946-2707
                    </p>
                    <span><a href="">info@KingsterApp.com</a></span>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
                    <h5 href="">Useful Links</h5>
                    <table style="margin-top: 30px;">
                        <tr>
                            <td><a>Courses</a></td>
                            <td><a>Universities</a></td>
                        </tr>
                        <tr>
                            <td><a>Training</a></td>
                            <td><a>Institutions</a></td>
                        </tr>
                        <tr>
                            <td><a>Careers</a> <span>HIRING</span></td>
                            <td><a>Havard</a></td>
                        </tr>
                        <tr>
                            <td><a>Pricing</a></td>
                            <td><a>Stanford</a></td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="row copyright">
                <div class="col-md-8 col-sm-12">
                    <p>Copyright All Right Reserved 2020, GoodLayers</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul>
                        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!---------------------------------------------end of footer--------------------------------->



</body>


<script src="{{ asset('js/typed.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/main.js')}}"></script>
</html>
