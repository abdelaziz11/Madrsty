<template>
    <div>
        <div class="teacher-students">
        <div class="container">
            <div class="content">
                <table class="table table-bordered mt-5">
                    <tr>
                        <td colspan="2"  style="padding-bottom: 2rem !important;"><h1>My Students</h1> <i class="fas fa-user-graduate float-right"></i></td>
                    </tr>
                    <tr v-for="student in students" :key="student.id">
                        <td>
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid mx-2" width="80"> 
                            <div class="info">
                                <h3>Ahmed Gomla</h3>
                            <ul class="list-group">
                                <li><i class="fas fa-mobile"></i>{{ student.phone_number }}</li>
                                <li><i class="fas fa-map-marker"></i>{{ student.email }}</li>
                            </ul>
                            </div>

                        </td>
                        <td style="text-align: center;">
                            <!--  trigger modal -->
                            <i class="fas fa-question-circle mt-4" data-toggle="modal" data-target="#centralModalSm"></i>
                            
                        

                        </td>
                    </tr>
                   
                    
                   
                </table>
            </div>
        </div>
    </div>


    <questions />
    </div>

</template>

<script>
import axios from "axios"
import questions from "../views/modals/questions"

export default {
    name:"students",
    data:()=>{
        return {
                students:[],
                id:""
            }
        },
    mounted(){
        console.log(this.$route.params.id);
        this.id = this.$route.params.id 
        axios.get(`http://127.0.0.1:8000/api/courseStudents/${this.id}`).then((response)=>{
            console.log(response)
            this.students = response.data
        }).catch((error)=>{

        })
    },
    components:{
        questions
    }
}
</script>