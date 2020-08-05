<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!----------------------------------------------css------------------------------------------------>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!----------------------------------------------script------------------------------------------------>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    
</head>
<body>
	
	<!-- Main navigation -->
	<div class="container-fluid mt-3 mb-5">
			<!--Grid row-->
			<div class="row">
	          
				<div class="col-md-4 display"  >
					<h1>طالب</h1>
					<a href="{{ route('register') }}"><img src="{{asset('/images/126-1260260_doctor-transparent-student-png-college-boy-student-png.png')}}" alt=""></a>
				</div>
				<div class="col-md-4">
                    <form action="{{route('login')}}" method="POST">
                    @csrf
					<div class="card login-card">
						<h5 class="card-header info-color white-text text-center py-4  ">
							<strong>تسجيل الدخول</strong>
							
						</h5>
						<div class="card-body z-depth-2 px-4">	
							<div class="md-form">
								<i class="fa fa-phone prefix grey-text"></i>
								<input type="text" id="phoneNumber" name="phone_number" class="form-control">
								<label for="phoneNumber">رقم التليفون </label>
							</div>
							<div class="md-form">
								<i class="fas fa-key prefix grey-text"></i>
								<input type="password" name="password" id="password" class="form-control">
								<label for="password">كلمة المرور </label>
							</div>
							<span class="span" onclick="myFunction()" >انشاء حساب جديد</span>
							<div class="text-center my-3">
								<button class="btn btn-indigo btn-block mt-5" style="background-color: #33b5e5 !important;">دخول</button>
							</div>
						</div>
					</div>
                    </form>
				</div>
				<div class="col-md-4 display" >
					<h1>مدر س</h1>
					<a href="{{ route('register') }}"><img src="images/6761753_preview.png" alt=""></a>
				</div>
	
			</div>
			<!--Grid row-->	
	</div>
  	<!-- Main navigation -->
	


	<script>
		function myFunction() {
			var x = document.getElementsByClassName("display");
				console.log(x)
				x[0].style.visibility = "visible";
				x[1].style.visibility = "visible";
			}
			
	</script>
</body>
</html>