<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Applicantions</title>

    <!-- Font Icon -->
    {{-- <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}"> --}}

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/applicantStyle.css') }}">
    <style>
        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
        }
        
        .button1 {
          background-color: #4CAF50; 
          color: white; 
          border: 1px solid #4CAF50;
        }
        
        .button1:hover {
          background-color: white;
          color: #4CAF50;
        }
        
        .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
        }
        .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }
        .closebtn:hover {
          color: black;
        }
        </style>
</head>

<body id="body">

    <div class="lds-roller" id="load" style=" position:absolute;
    display:none;
          top: 50%;
          left: 50%;
          margin-top: -50px;
          margin-left: -50px;
          width: 100px;
          height: 100px; color:#ffde00;"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    
    <div class="container">
    <div class="main" id="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            
                <div class="signup-content">
                    <form id="upload-form" method="post" action="{{ route('teachers.addMaterial') }}" class="signup-form"  >
                      @if (Session::get('success')!=null)
                      <div class="alert" style="background-color: #4CAF50;" id="s"><span class="closebtn" onclick="document.getElementById('s').style.display='none';">&times;</span> {{ Session::get('success') }}  </div>
                          
                      @endif
                        <div id="alert">
                        </div>
                        <!-- input name -->
                        @csrf
                        <h2 class="form-title">Job Application</h2>
                        
                        <div class="form-group">
                            <label for="name" style="margin: 15px;">Title</label>
                            <input type="text" value="1" class="form-input" name="course_id" id="course_id" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="name" style="margin: 15px;">Title</label>
                            <input type="text" class="form-input" name="title" id="title" placeholder="Name" required/>
                        </div>
                        <div class="form-group">
                            <label for="email" style="margin: 15px;">Body</label>
                            <input type="text" id="body" class="form-input" name="body" id="body" placeholder="Email" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="cars" style="margin: 15px;">Upload Your File</label>
                            <input type="file" id="input-file" required>
                        </div>
                        <div style="text-align: center;">
                            <button type="button" onclick="firebaseUpload(event)" class="button button1" style="box-shadow: 1px 1px 5px 0px #4CAF50 ; width: 100%; margin: 10px; border-radius: 8px 8px 8px 8px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-storage.js"> </script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
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
  function onclosing(){
      document.getElementById('alert').style.display='none';
    }
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
const firebaseUpload = function(event) {
    event.preventDefault();
    var title = $("#title").val()
    var body = $("#body").val()
    var course_id = $('#course_id').val()
    // const body = document.getElementById('body');
    const form = document.getElementById('upload-form');
    const main = document.getElementById('main');
    // const load_div = document.getElementById('load');
   
    const alert = $('#alert')

      if (title == '') {
        alert.append("<div class='alert'><span class='closebtn' onclick='onclosing();'>&times;</span>  email must conatin @ symbol and  </div>")
        return 
      }
      if(body == ''){
        alert.append("<div class='alert'><span class='closebtn' onclick='onclosing();'>&times;</span>  name cannot be empty </div>")
        return 
      }
      if(document.getElementById('input-file').files.length == 0){
        alert.append("<div class='alert'><span class='closebtn' onclick='onclosing();'>&times;</span>  You must upload your CV </div>")
        return 
      }
     
    
    main.style.visibility = "hidden";
    // body.style.backgroundImage = 'none';
    // load_div.style.display = 'block';
    
    
    
  let storageRef = firebase.storage().ref();
  const file = document.getElementById('input-file').files[0];
  let fileRef = storageRef.child(`Materials/courseID${course_id}`+file.name);
  
  fileRef.put(file).then(function(response){
    fileRef.getDownloadURL().then(function(url){
        const form = document.getElementById('upload-form');
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'url';
        input.value = `${url}`;
        form.append(input);
        form.submit();
    });
  });
  
}
</script>

</body>
</html>