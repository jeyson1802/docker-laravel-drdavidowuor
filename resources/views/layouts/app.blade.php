<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Site Title -->
    <title>@yield('title')</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="preload"></div>

<div class="body-inner">

    <!-- Header start -->
    <header id="header" class="header header-transparent">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div><!-- logo end -->
                </div><!-- Navbar header end -->

                <div class="site-nav-inner">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">

                        <ul class="nav navbar-nav">

                            <li><a href="./">Inicio</a></li><!-- Home li end -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evento <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('conferenciadepastorestbjoshuaperu') }}">Conferencia</a></li>
                                    <li><a href="{{ url('programaciontbjoshuaperu') }}">Programación</a></li>
                                    <li><a href="{{ url('hotelestbjoshuaperu') }}">Hoteles</a></li>
                                    <li><a href="{{ url('transportetbjoshuaperu') }}">Transporte</a></li>
                                </ul>
                            </li><!-- Evento li end -->

                            <li><a href="{{ url('tbjoshuaperu') }}">Tb. Joshua</a></li><!-- Tb. Joshua li end -->

                            <li><a href="{{ url('preguntastbjoshua') }}">Preguntas Frecuentes</a></li><!-- Tb. Joshua li end -->

                            <li><a href="{{ url('contactotbjoshuaperu') }}">Contacto</a></li><!-- Tb. Joshua li end -->

                            <li class="header-ticket">
                                <a target="_blank" class="ticket-btn btn-primary" href="https://www.eventbrite.com.ar/e/entradas-evento-de-caridad-37379046735"><i class="fa fa-ticket"></i> Registro</a>
                            </li>

                        </ul><!--/ Nav ul end -->

                    </nav><!--/ Collapse end -->

                </div><!--/ Site nav inner end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    @yield('content')
    <!--
    ========================================================
                            FOOTER
    ========================================================
    -->

    <footer id="footer" class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <img src="images/footer-logo.png" alt="footer logo" />

                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- Footer social end -->

                    <div class="footer-menu">
                        <ul class="nav unstyled">
                            <li><a href="{{ url('conferenciadepastorestbjoshuaperu') }}">Conferencia</a></li>
                            <li><a href="{{ url('programaciontbjoshuaperu') }}">Programación</a></li>
                            <li><a href="{{ url('tbjoshuaperu') }}">Tb. Joshua</a></li>
                            <li><a target="_blank" href="https://www.eventbrite.com.ar/e/entradas-evento-de-caridad-37379046735">Registro</a></li>
                            <li><a href="{{ url('preguntastbjoshua') }}">Preguntas Frecuentes</a></li>
                            <li><a href="{{ url('contactotbjoshuaperu') }}">Contacto</a></li>
                        </ul>
                    </div><!-- Footer menu end -->

                    <div class="copyright-info">
                        <span>Copyright © 2017 Tb. Joshua Perú. All Rights Reserved.</span>
                    </div><!-- Copyright info end -->

                </div><!-- Content col end -->
            </div><!-- Content row end -->
        </div><!-- Container end -->

        <div class="footer-pattern"></div> <!-- Footer pattern image -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>

    </footer><!-- Footer end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <!-- Color box for Popup-->
    <script type="text/javascript" src="js/jquery.colorbox.js"></script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="js/custom.js"></script>

    @stack('scripts')

</div><!-- Body inner end -->
</body>
</html>