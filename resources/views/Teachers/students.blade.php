<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacer-students</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/teacher-students.css')}}">


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

  
    <div class="teacher-students">
    <div class="container">
        <div class="content">
            <table class="table table-bordered mt-5">
                <tr>
                    <td colspan="2"  style="padding-bottom: 2rem !important;"><h1>My Students</h1> <i class="fas fa-user-graduate float-right"></i></td>
                </tr>
                <div id="a">
                @foreach ($course_students as $student)
                     
                <tr>
                  <td>
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid mx-2" width="80"> 
                    <div class="info">
                            <h3>{{ $student->name }}</h3>
                            <ul class="list-group">
                            <li><i class="fas fa-mobile"></i>{{ $student->phone_number }}</li>
                            <li><i class="fas fa-map-marker"></i>{{ $student->email }}</li>
                          </ul>
                        </div>
                        
                      </td>
                      <td style="text-align: center;">
                        <!--  trigger modal -->
                        <i class="fas fa-question-circle mt-4" data-toggle="modal" data-target="#centralModalSm"></i>
                        
                        
                        
                      </td>
                    </tr>
                    
                  @endforeach
                </div>
               
            </table>
        </div>
    </div>



</body>
</html>