@extends('layouts.front-end')

@section('title')
Balance
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('/css/teacher-profile.css')}}">
    
@endsection

@section('content')


    <!--==========================================================-->
    <!------------------------start sidebar------------------------->
    <!--==========================================================-->
    <main class="teacher-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 xs-12">
                    <div class="main-info" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); padding:0;position: relative;">

                        <img id="photo" src="{{ $teacher->photo }}" alt="Choose Photo...." width="30%" style="margin:65px 0 0 14px" >
<label class="" style=" ">
   <i class="far fa-edit float-right edit" ></i> <input type="file" onchange="upload_profile_photo();" accept="image/*" id="file" hidden>
</label>                      
  <table class="float-right" style="padding:50px 20px">
                            <thead>
                                <tr>
                                    <td colspan="3" style="text-align: center;"><h4 style="font-weight: bold;">{{ $teacher->name }}</h4></td>
                                </tr>
                             </thead>
                            <tbody>
                            <tr>
                                <td><i class="fas fa-map-marker"></i></td>
                                <td>subject</td>
                                <td>{{ $subject_name->name }}</td>
                            </tr>
                             <tr>
                                <td><i class="fas fa-clock"></i></td>
                                <td>Total students</td>
                                <td>{{ $totalStudents }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i></td>
                                <td>Member since</td>
                                <td>{{$joiningDate}}</td>
                            </tr>
                            </tbody>
                           
                       
                        </table>


                        <div class="balance mt-5">
                            <div class="totla">
                                <span class="mr-5" style="color: #90696b;margin-left:0">My Total Balance</span>
                                <span><h1 style="display: inline; margin-top:15px;margin-left:0"> 18450.00 EGP</h1></span>
                            </div>
                        </div>
                    </div>
                    <div class="more-info" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <h5>Description </h5>
                        <p class="text_label" id="desc"> {{ $teacher->description }} </p>
                        <i class="far fa-edit float-right edit" id="editD" style="margin-top: -40px;"></i>
                        <div class="edit-content" style="display: none;">
                            <textarea name="" id="newDesc" style="width: 90%" rows="10"> {{ $teacher->description }} </textarea>
                            <button type="button" class="btn btn-primary" id="editDesc">save</button>
                            <button type="button" class="btn btn-danger">cancel</button>
                        </div>

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
                <div class="offset-lg-1 offset-md-1 col-lg-7 col-md-6 xs-12">
                   <div class="courses">
                        <h1>My Report</h1>
                        <div class="row">
                            @foreach($courses as $course)
                            <div class="col-lg-6 col-sm-12 mb-5">
                                <div class="content">
                                    <span class="CourseName">{{$course->name}}</span>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="student-count" style="display: inline;">
                                                    <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="{{$course->students()->count()}}" data-count-speed="20"></span>
                                                    <h5>Student</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">

                                                <div class="balance-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="5000" data-count-speed="1000"></span>
                                                    <h5>balance</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="lectures-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="{{$course->lectures()->count()}}" data-count-speed="20"></span>
                                                    <h5>lectures </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="unanswered-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="{{$course->questions()->count()}}" data-count-speed="20"></span>
                                                <h6>questions</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                         
                           
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            

                        </div>

                   </div>
                </div>
            </div>
    </main>
    <!--==========================================================-->
    <!------------------------end sidebar--------------------------->
    <!--==========================================================-->
    <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-storage.js"> </script>

    <script>
    var firebaseConfig = {
    apiKey: "AIzaSyCZhsVx8yozG3smh-ojl5f3A_hkh99YccE",
    authDomain: "laravel-firbase-e5551.firebaseapp.com",
    databaseURL: "https://laravel-firbase-e5551.firebaseio.com",
    projectId: "laravel-firbase-e5551",
    storageBucket: "laravel-firbase-e5551.appspot.com",
    messagingSenderId: "439155288540",
    appId: "1:439155288540:web:212c3ed06a8fc2ec858719",
    measurementId: "G-1BV1XNS8EP"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
   //counter
    //-- Plugin implementation
    (function($) {
        $.fn.countTo = function(options) {
            return this.each(function() {
            //-- Arrange
            var FRAME_RATE = 80; // Predefine default frame rate to be 60fps
            var $el = $(this);
            var countFrom = parseInt($el.attr('data-count-from'));
            var countTo = parseInt($el.attr('data-count-to'));
            var countSpeed = $el.attr('data-count-speed'); // Number increment per second
    
            //-- Action
            var rafId;
            var increment;
            var currentCount = countFrom;
            var countAction = function() {              // Self looping local function via requestAnimationFrame
                if(currentCount < countTo) {              // Perform number incremeant
                $el.text(Math.floor(currentCount));     // Update HTML display
                increment = countSpeed / FRAME_RATE;    // Calculate increment step
                currentCount += increment;              // Increment counter
                rafId = requestAnimationFrame(countAction);
                } else {                                  // Terminate animation once it reaches the target count number
                $el.text(countTo);                      // Set to the final value before everything stops
                //cancelAnimationFrame(rafId);
                }
            };
            rafId = requestAnimationFrame(countAction); // Initiates the looping function
            });
        };
        }(jQuery));
    
        //-- Executing
        $('.number-counter').countTo();

        $('#editD').click(function(){
		$(this).hide();
		$(this).prev().hide();
		$(this).next().show();
	});
      
      $('.btn-danger').click(function(){
          console.log($(this))
          console.log($('.btn-danger'))
        $(this).parent().hide();
        $('.text_label').css({'display': 'block'});
        $('.edit').show();
      });

      $('#editDesc').click(function(){
        $.ajax({
        url: "/teacher/editDescription",
        type: "POST",
        data: {"_token": $('#token').val(),"description":$('#newDesc').val() },
        success: function (response) {
            console.log(response);
            $('.btn-danger').parent().hide();
            $('.text_label').css({'display': 'block'});
            $('.edit').show();
            $('#desc').text(response)
           
        },
        error: function (response) {
            console.log(response);
        }
        });

        
      })
 function upload_profile_photo()
 {

  let storageRef = firebase.storage().ref();
            if(document.getElementById('file').files.length==0){
                alert("Please Choose Photo Firstly")
                return
            }
            const file = document.getElementById('file').files[0];

            let fileRef = storageRef.child('profile_pictures/'+file.name);
            
            fileRef.put(file).then(function(response){
                fileRef.getDownloadURL().then(function(url){
                console.log(url)
                $.ajax({
                url: "/teacher/changePhoto",
                type: "POST",
                data: {"_token": $('#token').val(),"photo":url },
                success: function (response) {
                    console.log(response);
                    $('#photo').attr("src",url);
                
                },
                error: function (response) {
                    console.log(response);
                }
                });
        });
        })

 }
           
        
 

  
  
  

  // Your web app's Firebase configuration
  
</script>

@endsection

