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

    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                        <a href="#">
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
                                    <li><a href="{{ url('conferenciadepastoresdrowuorperu') }}">Conferencia</a></li>
                                    <li><a href="{{ url('cruzadadrowuorperu') }}">Cruzada</a></li>
                                    <li><a href="{{ url('programaciondrowuorperu') }}">Programación</a></li>
                                </ul>
                            </li><!-- Evento li end -->

                            <li><a href="{{ url('drowuorperu') }}">Profeta Dr. David Owuor</a></li><!-- Dr. Owuor li end -->                            

                            <li><a href="{{ url('contactodrowuorperu') }}">Contacto</a></li><!-- Dr. Owuor li end -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ticket"></i> Registro <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('registroconferencia') }}">Conferencia</a></li>
                                    <li><a href="{{ url('registrocruzada') }}">Cruzada</a></li>
                                </ul>
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
                            <li><a target="_blank" href="https://www.facebook.com/arrepentimientoPeru/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UC4t2Ayei5g6kF6qCZRQTuBA/featured"><i class="fa fa-youtube"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/arrepentimientoal/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- Footer social end -->

                    <div class="footer-menu">
                        <ul class="nav unstyled">
                            <li><a href="{{ url('conferenciadepastoresdrowuorperu') }}">Conferencia</a></li>
                            <li><a href="{{ url('programaciondrowuorperu') }}">Programación</a></li>
                            <li><a href="{{ url('drowuorperu') }}">Profeta Dr. David Owuor</a></li>
                            <li><a href="{{ url('registrocruzada') }}">Registro</a></li>
                            <li><a href="{{ url('contactodrowuorperu') }}">Contacto</a></li>
                        </ul>
                    </div><!-- Footer menu end -->

                    <div class="copyright-info">
                        <span>Copyright © 2018 Profeta Dr. David Owuor Perú. All Rights Reserved.</span>
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