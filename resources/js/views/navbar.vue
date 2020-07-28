<template>
    <!--==========================================================-->
    <!------------------------start navbar-------------------------->
    <!--==========================================================-->

    <nav class="navbar navbar-expand-lg navbar-light navbar-default sticky-top" role="navigation">

        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><img src="https://demo.goodlayers.com/kingster/homepages/onlineacademy/wp-content/uploads/sites/4/2020/06/logo.png" width="150px" alt="logo"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <router-link class="nav-link hover-underline-animation" to="/teacher/home">profile</router-link>

                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link hover-underline-animation" to="/courses">courses</router-link>
                    </li>

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </div>
    </nav>
    <!--==========================================================-->
    <!--------------------------end navbar-------------------------->
    <!--==========================================================-->

</template>

<script>
export default {
    name:"navbar"
}
</script>
