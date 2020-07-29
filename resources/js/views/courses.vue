<template>
    <div class="teacher-courses">
        <div class="container">
            <div class="row" style="justify-content:space-between">
                <div v-for="course in courses" :key="course.id" class="col-md-3 col-sm-6 col-xs-12" style="margin: 80px 0 100px 0;" >

                <!--Exemple card-->
                <div class="maincontainer">

                    <div class="thecard">

                        <div class="flip" >

                            <!--Front card-->
                            <div class="thefront" ></div>
                            <!--Front card-->

                            <!--Back card-->

                            <div class="theback">
                                <div class="my-gradient radius-back"></div>
                                <p class="textarea">{{course.name}}</p>
                                    <router-link class=" waves-effect waves-light " :to="'/students/'+course.id">students</router-link>

                                    <a class=" waves-effect waves-light  ">student courses</a>
                                    <a class=" waves-effect waves-light ">student material</a>
                                    <a class=" waves-effect waves-light " style="padding: 10px 20px;">posts</a>
                                </div>
                            <!--/Back card-->
                        </div>
                        <div class="top waves-effect waves-light">
                            <h3>DESIGN</h3>
                        </div>
                    </div>

                </div>
                <!-- ./Exemple card -->
                </div>




            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios"
export default {
    name:"courses",
    data:() => {
        return {
            name:"",
            courses:[]
        }
    },
    mounted(){
        axios.get("http://127.0.0.1:8000/api/1/courses").then((response)=>{
            this.courses = response.data
        }).catch((error)=>{

        })
    }
}
</script>

