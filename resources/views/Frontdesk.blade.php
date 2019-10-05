@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='/css/layout.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body background="https://ouiwander.com/wp-content/uploads/2018/09/nitish-meena-37745-unsplash-e1537956553976.jpg">



@section('content')
    <section class="our-webcoderskull padding-lg">
        <div class="container">
            <div class="row heading heading-icon">
                <h2 style="font-family: 'Amaranth', sans-serif"><b>Front Desk</b>&nbsp&nbsp<a style="color: orange">Dash board</a></h2>
            </div>
            <ul class="row">
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;background: transparent;backdrop-filter: blur(15px);border-color:orange">
                        <figure><img src="https://img.icons8.com/color/480/000000/conference.png"></figure>
                        <h3><a style="color: white"><b>Customers</b></a></h3>

                        <ul class="follow-us clearfix">
                            <li><a href="Customer/create"><i class="fa fa-plus" aria-hidden="true" style="color: white"></i></a></li>
                            <li><a href="Customer"><i class="fa fa-cog" aria-hidden="true" style="color: white"></i></a></li>


                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;background: transparent;backdrop-filter: blur(15px);border-color:orange">
                        <figure><img src="https://www.brandeps.com/icon-download/C/Calendar-clock-01.svg" class="img-responsive" alt=""></figure>
                        <h3 ><a style="color: white" ><b>Reservations</b> </a></h3>
                        <ul class="follow-us clearfix">
                            <li><a href="Reservation/create"><i class="fa fa-plus" aria-hidden="true" style="color: white"></i></a></li>
                            <li><a href="Reservation"><i class="fa fa-cog" aria-hidden="true" style="color: white"></i></a></li>


                        </ul>
                    </div>
                </li>
                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;background: transparent;backdrop-filter: blur(15px);border-color:orange">
                        <figure><img src="https://cdn2.iconfinder.com/data/icons/hotel-113/64/hotel-23-256.png  "></figure>
                        <h3><a style="color: white"><b>Rooms</b> </a></h3>
                        <ul class="follow-us clearfix">
                            <li><a href="Room/create"><i class="fa fa-plus" aria-hidden="true" style="color: white"></i></a></li>
                            <li><a href="Room"><i class="fa fa-cog" aria-hidden="true" style="color: white"></i></a></li>


                        </ul>
                    </div>
                </li>

                <li class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;background:transparent;backdrop-filter: blur(15px);border-color:orange">
                        <figure><img src="https://img.icons8.com/color/480/000000/person-female.png"></figure>
                        <h3><a style="color: white" href="/reportR"><b>Reservation Report </b></a></h3>

                        <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true" style="color: white"></i></a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</body>
</html>
@endsection
