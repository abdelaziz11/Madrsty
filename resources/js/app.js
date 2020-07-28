import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Profile from './views/Profile'
import courses from './views/courses'

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
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
