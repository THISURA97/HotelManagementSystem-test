<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/ico" />

    <title>@yield('title') | </title>

    <!-- Bootstrap -->
    <link href="{{asset('js/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('js/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('js/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('js/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('js/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('js/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('js/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/finance.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Refresh Hikkaduwa</span></a>
                </div>

                <div class="clearfix"></div>



                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">


                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">





                            <li><a><i class="fa fa-clone"></i>Finance Management <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/reportOnline">Online Reservation Report</a></li>
                                    <li><a href="/getIncome">Income</a></li>
                                    <li><a href="/getExpence">Expence</a></li>
                                    <li><a href="/getFinanceReq">Finance Request</a></li>
                                    <li><a href="/reports">Reports</a></li>
                                    <li><a href="/create-chart">Finance Profit chart</a></li>


                                </ul>
                            </li>





                        </ul>
                    </div>





                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            <!-- /top tiles -->

            <div class="row" style="padding:10px">

                @yield('content')














            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Refresh Hikkaduwa - Hotel & Restaurant
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('js/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('js/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('js/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('js/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('js/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('js/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('js/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('js/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('js/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('js/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('js/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('js/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('js/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('js/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('js/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('js/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('js/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('js/moment/min/moment.min.js')}}"></script>
<script src="{{asset('js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('js/js/finance.min.js')}}"></script>



</body>
</html>

