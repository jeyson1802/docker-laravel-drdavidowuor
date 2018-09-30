@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <section id="banner">
        <div class="banner-item" style="background-image:url(images/hero-area/prueba.jpeg)">
            <div class="container">
                <div class="banner-content text-center">
                    <div class="countdown classic-style">
                        <div class="counter-day">
                            <span class="days">00</span>
                            <div class="smalltext">Días</div>
                        </div>
                        <div class="counter-hour">
                            <span class="hours">00</span>
                            <div class="smalltext">Horas</div>
                        </div>
                        <div class="counter-minute">
                            <span class="minutes">00</span>
                            <div class="smalltext">Minutos</div>
                        </div>
                        <div class="counter-second">
                            <span class="seconds">00</span>
                            <div class="smalltext">Segundos</div>
                        </div>
                    </div><!-- Countdown end -->

                    <h1 class="banner-title">Cruzada de Avivamiento y Sanidad <br> profeta Dr. Owuor</h1>
                    <h2 class="banner-desc">Lima - Perú, Fecha, 2017</h2>
                    <p class="banner-btn">
                        <a target="_blank" href="https://www.eventbrite.com.ar/e/entradas-evento-de-caridad-37379046735" class="btn btn-primary">Registrate Ahora</a>
                        <a href="{{ url('conferenciadepastoresdrowuorperu') }}" class="btn btn-border">Leer Más</a>
                    </p>
                </div><!-- Banner content end -->
            </div><!-- Container end -->
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

    <section id="ts-schedule" class="ts-schedule">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title">Programación</h2>
                <p class="section-sub-title"></p>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-md-12">

                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" id="nav-tabs">
                            <li class="active">
                                <a class="animated fadeIn" href="#tab_one" data-toggle="tab">
						  			<span class="tab-head">
										<span class="tab-text-title">Evento</span>
									</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_one">

                                <h2 class="schedule-date">Fecha</h2>

                                <div class="schedule-listing bg">
                                    <span class="schedule-slot-time">9:30 - 10:00</span>
                                    <div class="schedule-slot-info">
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-title">Entrada</h3>
                                            <p class="schedule-slot-desc">
                                                Se verificará la entrada de cada pastor, como requisitos la entrada se permitirá con el ticket de registro y su credencial como pastor.
                                            </p>
                                        </div><!--Info content end -->
                                    </div><!-- Slot info end -->
                                </div><!-- Slot listing 1 end -->

                                <div class="schedule-listing">
                                    <span class="schedule-slot-time">10:30 - 11:15AM</span>
                                    <div class="schedule-slot-info">
                                        <a href="#">
                                            <img class="schedule-slot-speakers" src="images/speakers/drowuor.jpg" alt="" />
                                        </a>
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-speaker-name">Equipo de Alabanza</h3>
                                            <h4 class="schedule-slot-title">Momento de adoración y alabanza</h4>
                                            <p class="schedule-slot-desc">El equipo de alabanza minmistrará el comienzo de la conferencia con adoración y alabanza a nuestro Señor.</p>
                                        </div><!--Info content end -->
                                    </div><!-- Slot info end -->
                                </div><!-- Slot listing 2 end -->

                                <div class="schedule-listing bg">
                                    <span class="schedule-slot-time">11:15 - 13:15PM</span>
                                    <div class="schedule-slot-info">
                                        <a href="#">
                                            <img class="schedule-slot-speakers" src="images/speakers/drowuor.jpg" alt="" />
                                        </a>
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-speaker-name">Profeta Dr. Owuor</h3>
                                            <h4 class="schedule-slot-title">El poder de la palabra</h4>
                                            <p class="schedule-slot-desc">Profeta Dr. Owuor impartirá la importancia del poder de la palabra.</p>
                                        </div><!--Info content end -->
                                    </div><!-- Slot info end -->
                                </div><!-- Slot listing 3 end -->

                                <div class="schedule-listing">
                                    <span class="schedule-slot-time">13:30 - 14:30PM</span>
                                    <div class="schedule-slot-info">
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-title">Refrigerio</h3>
                                            <p class="schedule-slot-desc">Se dará un descanso de 15 minutos.</p>
                                        </div><!--Info content end -->
                                    </div><!-- Slot info end -->
                                </div><!-- Slot listing 4 end -->

                                <div class="schedule-listing bg">
                                    <span class="schedule-slot-time">14:35 - 16:00PM</span>
                                    <div class="schedule-slot-info">
                                        <a href="#">
                                            <img class="schedule-slot-speakers" src="images/speakers/drowuor.jpg" alt="" />
                                        </a>
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-speaker-name">Profeta Dr. Owuor</h3>
                                            <h4 class="schedule-slot-title">Sesión de Liberación</h4>
                                            <p class="schedule-slot-desc">Profeta Dr. Owuor tendrá un sesión de liberación, sanidad y milagros.</p>
                                        </div><!--Info content end -->
                                    </div><!-- Slot info end -->
                                </div><!-- Slot listing 5 end -->

                            </div><!-- Tab pane 1 end -->

                        </div><!-- tab content -->

                        <div class="gap-60"></div>

                    </div><!-- Schedule tab end -->
                </div><!-- Col end -->
            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section><!-- Schedule end -->

    <section id="ts-newsletter" class="ts-newsletter">
        <div class="container">
            <div class="row">
                <div class="newsletter-form clearfix">
                    <h3>Suscríbete para noticias</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail aquí" autocomplete="off">
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
                <div class="col-md-4">
                    <div class="venu-info-content box1">
                        <span class="venu-info-icon"><i class="fa fa-map-marker"></i></span>
                        <h3 class="venu-info-title">Lugar</h3>
                        <p class="venu-info-text">La cruzada de avivamiento se llevará a cabo en Lima - Perú, para mayor información contáctenos..</p>
                        <a href="#" class="venu-info-link">Leer Más <i class="fa fa-angle-right"></i></a>
                    </div><!-- Venu content end -->
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="venu-info-content box2">
                        <span class="venu-info-icon"><i class="fa fa-bus"></i></span>
                        <h3 class="venu-info-title">Transporte</h3>
                        <p class="venu-info-text">Para llegar al lugar del evento le podemos sugerir que medios de transporte les pueden ayudar.</p>
                        <a href="#" class="venu-info-link">Leer Más <i class="fa fa-angle-right"></i></a>
                    </div><!-- Venu content end -->
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="venu-info-content box3">
                        <span class="venu-info-icon"><i class="fa fa-building"></i></span>
                        <h3 class="venu-info-title">Hoteles</h3>
                        <p class="venu-info-text">Contamos con convenios de hoteles cerca al local del evento, entre al detalle para más información.</p>
                        <a href="#" class="venu-info-link">Leer Más <i class="fa fa-angle-right"></i></a>
                    </div><!-- Venu content end -->
                </div><!-- Col 3 end -->

            </div><!-- Content row end -->
        </div><!-- Container end -->
    </section><!-- Venue end -->

    <div id="map" class="map"></div> <!-- Google Map -->
@endsection

@push('scripts')

    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <!-- Countdown -->
    <script type="text/javascript" src="js/jquery.jCounter.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
    <!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <!-- For latitude and longitude use http://www.latlong.net/ -->

    <script type="text/javascript" src="js/gmap3.min.js"></script>

    <script type="text/javascript">

        /* Event counter */

        $(".countdown").jCounter({
            date: '25 October 2018 12:00:00',
            fallback: function() { console.log("count finished!") }
        });


        /* Event map */

        var eventmap = {lat: 40.742964, lng: -73.992277};

        $('.map')
            .gmap3({
                zoom: 13,
                center: eventmap,
                mapTypeId : google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            })

            .marker({
                position: eventmap
            })

            .infowindow({
                position: eventmap,
                content: "Lima, Perú"
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