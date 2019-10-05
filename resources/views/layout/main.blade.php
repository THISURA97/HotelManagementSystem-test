<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>footer.nb-footer {
            background: #222;
            border-top: 4px solid #b78c33; }
        footer.nb-footer .about {
            margin: 0 auto;
            margin-top: 40px;
            max-width: 1170px;
            text-align: center; }
        footer.nb-footer .about p {
            font-size: 13px;
            color: #999;
            margin-top: 30px; }
        footer.nb-footer .about .social-media {
            margin-top: 15px; }
        footer.nb-footer .about .social-media ul li a {
            display: inline-block;
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            font-size: 16px;
            color: #b78c33;
            border: 1px solid rgba(255, 255, 255, 0.3); }
        footer.nb-footer .about .social-media ul li a:hover {
            background: #b78c33;
            color: #fff;
            border-color: #b78c33; }
        footer.nb-footer .footer-info-single {
            margin-top: 30px; }
        footer.nb-footer .footer-info-single .title {
            color: #aaa;
            text-transform: uppercase;
            font-size: 16px;
            border-left: 4px solid #b78c33;
            padding-left: 5px; }
        footer.nb-footer .footer-info-single ul li a {
            display: block;
            color: #aaa;
            padding: 2px 0; }
        footer.nb-footer .footer-info-single ul li a:hover {
            color: #b78c33; }
        footer.nb-footer .footer-info-single p {
            font-size: 13px;
            line-height: 20px;
            color: #aaa; }
        footer.nb-footer .copyright {
            margin-top: 15px;
            background: #111;
            padding: 7px 0;
            color: #999; }
        footer.nb-footer .copyright p {
            margin: 0;
            padding: 0; }</style>
</head>
<body background="https://ouiwander.com/wp-content/uploads/2018/09/nitish-meena-37745-unsplash-e1537956553976.jpg">

<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="/">
                    <img src="https://refreshhikkaduwa.com/images/logo/logo.png" alt="logo" style="width:150px;">
                </a>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <b><a class="nav-link" href="{{ route('login') }}" style="color: orange;font-size: 16px;font-family: Helvetica, Arial, sans-serif">{{ __('Login') }}</a></b>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="color: orange;font-size: 16px;font-family: Helvetica, Arial, sans-serif">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 20px;font-family: 'Amaranth', sans-serif">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="font-size: 15px">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" style="font-size: 15px">My profile</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>





    <div> @yield('body')</div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <footer class="nb-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">
                        <img src="" class="img-responsive center-block" alt="">
                        <p>Bootstrap Footer example snippets with CSS, Javascript and HTML. Code example of bootstrap-3 footer using HTML, Javascript, jQuery, and CSS. 5 Beautiful and Responsive Footer Templates. Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>

                        <div class="social-media">
                            <ul class="list-inline">
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Help Center</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Customer information</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Security & privacy</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Payment</h2>
                        <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>

                    </div>
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright © 2017. Your Company.</p>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>
    </footer>
</div>
</body>






</html>
