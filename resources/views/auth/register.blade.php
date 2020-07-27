<!DOCTYPE html>
<html>

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
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    
</head>

<body>

    <div class="card-register">

        <h5 class="card-header info-color white-text text-center py-4  ">
            <strong> انشاء حساب جديد</strong>
            
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">


           
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!">

                <div class="md-form mb-5">
                    <input id="name" type="text" class="form-control validate"  name="name"  placeholder=""  required autocomplete="name" autofocus>
                    <label data-error="wrong" data-success="right" >الاسم </label>
                </div>
               
                <div class="md-form mb-5">
                    <label class="custom-control-label">النوع</label><br>
                    <!-- Default unchecked -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                        <label class="custom-control-label" for="defaultUnchecked">ذكر </label>
                        
                    </div>
                    
                    <!-- Default Checked -->
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
                        <label class="custom-control-label" for="defaultChecked">انثى </label>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="md-form">
                    <input type="text" id="phoneNumber" class="form-control">
                    <label >رقم التليفون</label>
                </div>

                <!-- Subject -->
                <span>الصف الدراسي</span>
                <select  class="browser-default custom-select" style="color: #757575bd" class="mdb-select">
                    <option value="" disabled>اختار صفك</option>
                    <option value="1" selected>ثانوي عام</option>
                    <option value="2">اعدادي</option>
                    <option value="3"> ابتدائي</option>
                </select>
                <span> المادة</span>

                <!-----------------------if role is teacher-------------------->

                <select  class="browser-default custom-select" style="color: #757575bd" class="mdb-select">
                    <option value="" disabled>اختار مادتك</option>
                    <option value="1" selected> عربي</option>
                    <option value="2">لغة اجنبية اولي</option>
                    <option value="3"> لغة اجنبية ثانية</option>
                </select>

                <!-----------------------if role is student-------------------->
                <span> السنة الدراسية</span>
                <select  class="browser-default custom-select" style="color: #757575bd" class="mdb-select">
                    <option value="" disabled>اختارالسنة الدراسية</option>
                    <option value="1" selected> اولى </option>
                    <option value="2">  ثانية</option>
                    <option value="3">  ثالثة  </option>
                    <option value="4">  رابعة  </option>
                    <option value="5">  خامسة  </option>
                </select>
                <!-- Send button -->
                <button class="btn btn-outline-info btn-rounded waves-effect mt-5" type="submit">تسجيل الدخول</button>

                
            </form>
            <!-- Form -->

        </div>

    </div>

</body>


</html>