<template>


    <!--==========================================================-->
    <!------------------------start sidebar------------------------->
    <!--==========================================================-->
    <main class="teacher-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 xs-12">
                    <div class="main-info" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); padding:0;">

                        <img  src="/images/profile-img.webp" alt="" width="30%" style="margin:65px 0 0 14px" >

                       <table class="float-right" style="padding:50px 20px">
                            <thead>
                                <tr>
                                    <td colspan="3" style="text-align: center;"><h4 style="font-weight: bold;">teacher name</h4></td>
                                </tr>
                             </thead>
                            <tbody>
                            <tr>
                                <td><i class="fas fa-map-marker"></i></td>
                                <td>subject</td>
                                <td>arabic</td>
                            </tr>
                             <tr>
                                <td><i class="fas fa-clock"></i></td>
                                <td>Total students</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i></td>
                                <td>Member since</td>
                                <td>12/5/2020</td>
                            </tr>
                            </tbody>


                        </table>


                        <div class="balance mt-5">
                            <div class="totla">
                                <span class="mr-5" style="color: #90696b;margin-left:0">My Total Balance</span>
                                <span><h1 style="display: inline; margin-top:15px;margin-left:0">&dollar; 18450.00</h1></span>
                            </div>
                        </div>
                    </div>
                    <div class="more-info" style="  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
                        <h5>Description </h5>
                        <p class="text_label">There's a deep, engaging voice you're looking for. It's powerful, yet gentle. You can hear it. In addition to being a singer-songwriter and author, I narrate audiobooks and voice projects for folks like you. I find great honor in delivering flawless work, no matter how big or small the project. You'll notice I can eliminate my natural southern accent, if it doesn't fit the project. And if you need a soft, southern affect, I'm your guy. Lastly, as a highly educated man and a member of Mensa, your more advanced vocabulary is safe in my hands...or mouth as it were.</p>
                        <i class="far fa-edit float-right edit" style="margin-top: -40px;"></i>
                        <div class="edit-content" style="display: none;">
                            <textarea name="" id="" style="width: 90%" rows="10">There's a deep, engaging voice you're looking for. It's powerful, yet gentle. You can hear it. In addition to being a singer-songwriter and author, I narrate audiobooks and voice projects for folks like you. I find great honor in delivering flawless work, no matter how big or small the project. You'll notice I can eliminate my natural southern accent, if it doesn't fit the project. And if you need a soft, southern affect, I'm your guy. Lastly, as a highly educated man and a member of Mensa, your more advanced vocabulary is safe in my hands...or mouth as it were.</textarea>
                            <button type="button" class="btn btn-primary">save</button>
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
                        <h1>MY COURSES</h1>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 mb-5">
                                <div class="content">
                                    <span class="CourseName">Course Name</span>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="student-count" style="display: inline;">
                                                    <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>Student</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">

                                                <div class="balance-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>balance</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="lectures-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>lectures </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="unanswered-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                <h6>unanswered questions </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-5">
                                <div class="content">
                                    <span class="CourseName">Course Name</span>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="student-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>Student</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">

                                                <div class="balance-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>balance</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="lectures-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>lectures </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="unanswered-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                <h6>unanswered questions </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-5">
                                <div class="content">
                                    <span class="CourseName">Course Name</span>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="student-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>Student</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">

                                                <div class="balance-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>balance</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="lectures-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>lectures </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="unanswered-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                <h6>unanswered questions </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-5">
                                <div class="content">
                                    <span class="CourseName">Course Name</span>
                                    <div class="counter">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="student-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>Student</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">

                                                <div class="balance-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>balance</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="lectures-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h5>lectures </h5>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="unanswered-count" style="display: inline;">
                                                <span class="count number-counter" style="display: inline;"  data-count-from="0" data-count-to="100" data-count-speed="20"></span>
                                                    <h6>unanswered questions </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name:"Profile",
    data:()=>{
        return {
            id:localStorage.id,
            name:localStorage.name,
            email:localStorage.email,
            subject_id:localStorage.subject_id,
        }
    }
}
</script>
