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
            <table class="table table-bordered mt-5" id="a">
                <tr>
                    <td colspan="2"  style="padding-bottom: 2rem !important;"><h1>My Students</h1> <i class="fas fa-user-graduate float-right"></i></td>
                </tr>
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
                        <i class="fas fa-question-circle mt-4" data-studentid="{{ $student->id }}" data-courseid={{ $course_id }} data-toggle="modal" data-target="#centralModalSm"></i>
                        
                        
                        
                      </td>
                    </tr>
                    
                  @endforeach
                  
                </table>
        </div>
    </div>





         <!--    Central Modal Small -->
         <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
     
         <!-- Change class .modal-sm to change the size of the modal -->
         <div class="modal-dialog modal-lg " role="document">
     
     
         <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
             </div>
             <div class="modal-body">
             <!--Accordion wrapper-->
                 <div id="modal" class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                     <!-- Accordion card -->
                     <div class="card">
                 
                     <!-- Card header -->
                     <div class="card-header" role="tab" id="headingOne1">
                         <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                         aria-controls="collapseOne1">
                         <h5 class="mb-0"> <i class="fas fa-angle-down rotate-icon"></i>
                         </h5>
                         </a>
                     </div>
                 
                     <!-- Card body -->
                     <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                         data-parent="#accordionEx">
                         <div class="card-body">
                             
                         Anim pariatur 
                         </div>
                     </div>
                 
                     </div>
                     <!-- Accordion card -->
                 
                 </div>
                 <!-- Accordion wrapper -->
             </div>
             <div class="modal-footer">
             <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary btn-sm">Save changes</button>
             </div>
         </div>
         </div>
     </div>

     <!-- Central Modal Small -->

     <script>
       $('#a').on('click','i',function() {

        console.log(this)
        console.log($(this).attr('data-studentid'))
        var student_id = $(this).attr('data-studentid')
        var course_id = $(this).attr('data-courseid')
        $.get(`http://127.0.0.1:3030/api/studentQuestions/${course_id}/${student_id}`)
        .done(function(response) {
          console.log(response)
        })
        .fail(function(erro) {
          console.log('Failed to fetch the Access Token with error: ' + erro);
        });
        
        $('#modal').append("<div class='card'><div class='card-header' role='tab' id='headingOne1'><a data-toggle='collapse' data-parent='#accordionEx' href='#collapseOne1' aria-expanded='true' aria-controls='collapseOne1'><h5 class='mb-0'> <i class='fas fa-angle-down rotate-icon'></i></h5></a></div><div id='collapseOne1' class='collapse show' role='tabpanel' aria-labelledby='headingOne1' data-parent='#accordionEx'><div class='card-body'>Anim pariatur</div></div></div>")
       })
     </script>
</body>
</html>