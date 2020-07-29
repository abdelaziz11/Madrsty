import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Profile from './views/Profile'
import courses from './views/courses'
import students from './views/students'

console.log("hello")
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/teacher/home',
            name: 'Profile',
            component: Profile
        },
        {
            path: '/courses',
            name: 'courses',
            component: courses
        },
        {
            path: '/students/:id',
            name: 'student',
            component: students
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
