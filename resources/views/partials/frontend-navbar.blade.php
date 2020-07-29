<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <a class="nav-link hover-underline-animation" href="{{ route('teachers.profile') }}">profile
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover-underline-animation" href="{{ route('teachers.courses', Auth::id()) }}">courses</a>
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

<script>
    const nav_items = document.querySelectorAll('.nav-item');
    for (let i = 0; i < nav_items.length; i++)
    {
        nav_items[i].addEventListener('click', function() {
            const current_active = document.querySelector('.active');
            console.log(current_active);
            current_active.className.replace(' active', '');
            this.className += 'active';
        });
    }
</script>

</body>
</html>

