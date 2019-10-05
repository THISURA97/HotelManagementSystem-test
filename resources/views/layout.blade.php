<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href='/css/layout.css' rel='stylesheet'>
    <link href='/css/boostrap.min.css' rel='stylesheet'>

    <script src='/js/jquery.slim.min.js'></script>
    <script src='/js/bootstrap.bundle.min.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body background="https://ouiwander.com/wp-content/uploads/2018/09/nitish-meena-37745-unsplash-e1537956553976.jpg">
<nav class="navbar navbar-expand-md bg-dark shadow-sm " >
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">
            <img src="https://refreshhikkaduwa.com/images/logo/logo.png" alt="logo" style="width:150px;">
        </a>

        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav text-uppercase ml-auto" style="font-family: Helvetica, Arial, sans-serif">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="home" style="color: orange"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about" style="color: orange">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about" style="color: orange">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="dashboard"style="color: orange">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="login"style="color: orange">My Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div >
    @yield('carousel1')
</div>

<div >
    @yield('carousel2')
</div>



</body>






</html>
