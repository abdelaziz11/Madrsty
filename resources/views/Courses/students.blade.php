@extends('layouts.front-end')

@section('title')
teacher-students
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/teacher-students.css')}}">
@endsection

@section('content')
    <div class="teacher-students">
    <div class="container">
        <div class="content">
            <table class="table table-bordered mt-5" id="a">
                <tr>
                    <td colspan="2"  style="padding-bottom: 2rem !important;"><h1 style="font-weight: 400;">My Students</h1> <i class="fas fa-user-graduate float-right"></i></td>
                </tr>
                @foreach ($course_students as $student)
                     
                <tr>
                  <td>
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid mx-2" width="80"> 
                    <div class="info">
                            <h3 style="font-weight: 100;">{{ $student->name }}</h3>
                            <ul class="list-group" style="margin: 3px;">
                            <li><i class="fas fa-map-marker" style=""></i>{{ $student->email }}</li>
                            <li><i class="fas fa-mobile" style="margin-right: 3px;"></i>{{ $student->phone_number }}</li>
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
                    <div data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                    aria-controls="collapseOne1">
                    No Questions fot this student
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
@section('scripts')
<script>
       $('#a').on('click','i',function() {

        console.log(this)
        console.log($(this).attr('data-studentid'))
        var student_id = $(this).attr('data-studentid')
        var course_id = $(this).attr('data-courseid')
        $.get(`/api/studentQuestions/${course_id}/${student_id}`)
        .done(function(response) {
            console.log(response)
            $('#modal').html('')
            if (response!=[]) {
              $('#modal').append("<div class='card'><div class='card-header' role='tab' id='headingOne1'><div data-parent='#accordionEx'><h5 class='mb-0'>"+response[0].title+" </h5></div></div><div id='collapseOne1' class='collapse show' role='tabpanel' aria-labelledby='headingOne1' data-parent='#accordionEx'><div class='card-body' id='"+response[0].id+"'></div></div></div>")
              
              $.get(`/api/questionAnswers/${response[0].id}`)
              .done(function(res){
                console.log(res)
                res.forEach(el => {
                  $(`#${response[0].id}`).append("- " + el.body + "<br>")
                  
                });
                
              })
              .fail(function(){
                
              })
              }
            })
            .fail(function(erro) {
              console.log('Failed to fetch the Access Token with error: ' + erro);
            });
        
       })
       </script>
@endsection
@endsection
</body>
</html>
