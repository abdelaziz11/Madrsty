@extends('layouts.front-end')

@section('title')
Course's Questions
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('/css/course-material.css')}}">

@endsection

@section('content')
     
<section style="">
  <form style=" max-width: 900px;min-height: 200px ; margin: 30px auto 40px;" id="upload-form" method="post" action="{{ route('teachers.addMaterial') }}" >


<div class="md-form" style="min-width:900px;">
  <textarea id="body" name="body" class="md-textarea form-control" style="" rows="3"></textarea>
  <label for="form10">Write the post here</label>
</div>
<button class="btn btn-primary" id="add-post" type="button" style="float: right">Post</button>

<input type="hidden" name="title" id="title" value="dewdwdw">
<input type="hidden" id="course_id" name="course_id" value="{{$id}}">


<label class="btn btn-primary" style="float: right;">
   <i class="fa fa-upload" ></i> <input type="file"  id="input-file" hidden>
</label>

 
</form>


<div class="wrapper" id="loading" style="display: none;">
  <div class="cover"></div>
  <div class="page"></div>
  <div class="inner-border"></div>
  <p>Uploading...</p>
</div>  

  <div class="container" id="main"  >
    @foreach($course_materials as $course)
    <div class="box image" style="  box-shadow:0px 4px 10px -1px rgba(151, 171, 187, 0.7);
">
      <div class="box-header">
        <h3><a href=""><img src="" alt="M" />Me</a>
          <span style="margin-top: 5px;">{{$course->created_at}} <i class="fa fa-globe"></i></span>
        </h3>
      </div>
      <div class="box-content">
        <div class="content">
          <img src="" alt="" />
        </div>
        <div class="bottom">
          <p>{{$course->body}} </p>
        </div>
      </div>
     
      <div class="box-buttons">
        <div class="row">
           <button style="width: 100%;"> <span class="fa fa-download"></span></button>
        </div>
      </div>
     
       
    </div>
    @endforeach
   
  </div>
</section>

@section('scripts')
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-storage.js"> </script>

<script>

  function onclosing(){
      document.getElementById('alert').style.display='none';
    }

</script>

<script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
      const firebaseConfig = {
  apiKey: "AIzaSyCcB1RX0S6Lj_Jx8H8moPF2bfVsqaIXBVI",
  authDomain: "tawakl-tech.firebaseapp.com",
  databaseURL: "https://tawakl-tech.firebaseio.com",
  projectId: "tawakl-tech",
  storageBucket: "tawakl-tech.appspot.com",
  messagingSenderId: "991884504870",
  appId: "1:991884504870:web:76a977770fdc59a63cdbe7",
  measurementId: "G-69J77HETB6"
};


    firebase.initializeApp(firebaseConfig);

  // Initialize Firebase
$('#add-post').click(function()
{
   
    // const body = document.getElementById('body');
    const main = $('#main');
    // const load_div = document.getElementById('load');
       const loading = $('#loading');

   
    
    main.hide();
        loading.show();

      // body.style.backgroundImage = 'none';
    // load_div.style.display = 'block';
    
    
    
  const file = document.getElementById('input-file').files[0];
  if (file!=null) 
  {
  let storageRef = firebase.storage().ref();
let fileRef = storageRef.child(`Materials/courseID${course_id}`+file.name);
  
  fileRef.put(file).then(function(response){
    fileRef.getDownloadURL().then(function(url){
     
    var fireUrl=url;
    console.log(fireUrl)
    $.ajax({
      url: "/teacher/addMaterial",
      type: "POST",
      data: {"_token": $('#token').val(),course_id: $("#course_id").val(),title: $("#title").val(),body: $("#body").val(),url:fireUrl },
      success: function (response) {
           console.log(response);
            $("#body").val('');
           var new_post = '<div class="box image" style=" box-shadow:0px 4px 10px -1px rgba(151, 171, 187, 0.7);"> <div class="box-header"> <h3><a href=""><img src="" alt="M" />Me</a> <span style="margin-top: 5px;">'+response.created_at+'<i class="fa fa-globe"></i></span> </h3> <span><i class="fa fa-angle-down"></i></span> <div class="window"><span></span></div> </div> <div class="box-content"> <div class="content"> <img src="" alt="" /> </div> <div class="bottom"> <p>'+response.body+' </p> <span><span class="fa fa-search-plus"></span></span> </div> </div> <div class="box-buttons"> <div class="row"> <button style="width: 100%;"><span class="fa fa-download"></span></button> </div> </div> </div>'
           main.prepend(new_post);
            loading.hide();
            main.show();


           
         },
         error: function (response) {
           console.log(response);
         }
  });   

});
  });


  }
  
});

});

</script>
@endsection   
@endsection