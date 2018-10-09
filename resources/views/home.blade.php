@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <section id="banner">
        <div class="banner-item" style="background-image:url(images/hero-area/portada.jpg)">
        </div><!-- Banner item end -->
    </section><!-- Section banner end -->

    <section id="ts-intro" class="ts-intro">
        <div class="container">

            <div class="row text-center">
                <h2 class="section-title">Cruzada de avivamiento</h2>
                <p class="section-sub-title">Profeta Dr. Owuor</p>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="intro-video">
                        <img class="img-responsive" src="images/intro-video.jpg" alt="" />
                        <a class="popup" href="https://www.youtube.com/embed/sYSIG2u6q14?autoplay=1&amp;loop=1">
                            <div class="video-icon">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div><!-- Col end -->

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="featured-tab">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                    Liberación
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Sanidad</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Impartición</span>
									</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                <h3 class="tab-content-title">Sesión de Liberación </h3>
                                <p class="sppb-cta-text">	El cuerpo de Cristo necesita ser liberado de toda opresión. En la cruzada de avivamiento por el profeta Dr. Owuor tendremos una sesión de liberación con poder. Seremos libres por el poder de Cristo nuestro Señor.
                                </p>
                                <blockquote>	El Espíritu del Señor está sobre mí, Por cuanto me ha ungido para dar buenas nuevas a los pobres; Me ha enviado a sanar a los quebrantados de corazón; A pregonar libertad a los cautivos, Y vista a los ciegos; A poner en libertad a los oprimidos - Lucas 4:18</blockquote>
                            </div><!-- Tab pane 1 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_b">
                                <h3 class="tab-content-title">Sesión de Sanidad</h3>
                                <p>El profeta Dr. Owuor tendrá una sesión de oración por sanidad, cada pastor podrá ser libre de toda enfermdad que el enemigo haya querido poner sobre sus vidas, para así poder liberar al pueblo de Cristo.
                                <blockquote>		tomarán en las manos serpientes, y si bebieren cosa mortífera, no les hará daño; sobre los enfermos pondrán sus manos, y sanarán - Marcos 16:18</blockquote>
                                </p>
                            </div><!-- Tab pane 2 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_c">
                                <h3 class="tab-content-title">Sesión de impartición</h3>
                                <p>El profeta Dr. Owuor impartirá bendición y unción sobre los invitados de la conferencia, esto traerá un cambio a la nación de Perú.</p>
                                <ul class="list-arrow">
                                    <li>Sanidad</li>
                                    <li>Liberación</li>
                                    <li>Unción</li>
                                    <li>Finanzas</li>
                                </ul>
                            </div><!-- Tab pane 3 end -->
                        </div><!-- tab content -->
                    </div><!-- Featured tab end -->
                </div><!-- Col end -->

            </div><!-- Content Row end -->
        </div><!-- Container end -->
    </section><!-- Intro area end -->

    <section id="facts" class="facts-area bg-overlay">
        <div class="container">
            <div class="row">
                <div class="facts-wrapper">
                    <div class="col-sm-3 ts-facts">
						<span class="ts-facts-icon">
							<i class="fa fa-users"></i>
						</span>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">1500</span></h2>
                            <h3 class="ts-facts-title">Pastores</h3>
                        </div>
                    </div><!-- Col 1 end -->

                    <div class="col-sm-3 ts-facts">
                        <div class="ts-facts-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">1</span></h2>
                            <h3 class="ts-facts-title">Conferencistas</h3>
                        </div>
                    </div><!-- Col 2 end -->

                    <div class="col-sm-3 ts-facts">
                        <div class="ts-facts-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">4</span></h2>
                            <h3 class="ts-facts-title">Sesiones</h3>
                        </div>

                    </div><!-- Col 3 end -->

                    <div class="col-sm-3 ts-facts">
                        <div class="ts-facts-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">15</span></h2>
                            <h3 class="ts-facts-title">Países</h3>
                        </div>

                    </div><!-- Col 4 end -->
                </div><!-- Facts end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!-- Facts end -->

    @include('programmersection')

    <section id="ts-newsletter" class="ts-newsletter">
        <div class="container">
            <div class="row">
                <div class="newsletter-form clearfix">
                    <h3>Suscríbete para noticias</h3>
                    <form action="/sendsuscription" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" name="correo" id="correo" class="form-control form-control-lg" placeholder="E-mail aquí">
                            <button class="btn btn-primary">Suscribirse</button>
                        </div>
                    </form>
                </div>
            </div><!-- Row end -->
        </div><!--/ Container end -->
    </section><!--/ Newsletter end -->

    <section id="ts-venue" class="ts-venue">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title">Mayor Información</h2>
                <p class="section-sub-title">Donde Ubicarnos</p>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="venu-info-content box1">
                        <span class="venu-info-icon"><i class="fa fa-map-marker"></i></span>
                        <h3 class="venu-info-title">Lugar</h3>
                        <p class="venu-info-text">La cruzada de avivamiento se llevará a cabo en <b> Explanada 200 Millas - Ovalo Las Palomas - Frente al Parque Huascar - V.E.S - Lima - Perú </b>, para mayor información contáctenos..</p>
                        <a href="{{ url('contactodrowuorperu') }}" class="venu-info-link">Leer Más <i class="fa fa-angle-right"></i></a>
                    </div><!-- Venu content end -->
                </div><!-- Col 1 end -->

            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Venue end -->

    <div id="map" class="map"></div> <!-- Google Map -->
@endsection

@push('scripts')

    <!-- Google Map -->
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyD8nTg4zwDHEZYRnbNyUQnI78kshb31RoI"></script>
    <!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <!-- For latitude and longitude use http://www.latlong.net/ -->

    <script type="text/javascript" src="js/gmap3.min.js"></script>

    <script type="text/javascript">

        /* Event map */

        var eventmap = {lat: -12.229033, lng: -76.928103};

        $('.map')
            .gmap3({
                zoom: 16,
                center: eventmap,
                mapTypeId : google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            })

            .marker({
                position: eventmap
            })

            .infowindow({
                position: eventmap,
                content: "Explanada 200 Millas - V.E.S"
            })

            .then(function (infowindow) {
                var map = this.get(0);
                var marker = this.get(1);
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });


    </script>
@endpush