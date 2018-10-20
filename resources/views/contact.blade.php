@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

    <div id="page-banner-area" class="page-banner-area">
    </div><!-- Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">

                            <div class="contact-info-box">
                                <i class="fa fa-users">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Coordinadores Nacionales</h4>
                                    <p>Ps. Cesar Pisconti - Obispo Herbert Ayer</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-phone">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Teléfonos</h4>
                                    <p>941377810 / 925885957</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-map-marker">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Dirección</h4>
                                    <p>Explanada 200 Millas - Ovalo Las Palomas - Frente al Parque Huascar - V.E.S - Lima - Perú</p><br>
                                    <a href="https://www.facebook.com/arrepentimientoPeru/">https://www.facebook.com/arrepentimientoPeru/</a><br>
                                    <a href="https://www.facebook.com/ministeriopalabrayespiritu/">https://www.facebook.com/ministeriopalabrayespiritu/</a>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-envelope-o">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>E-mail</h4>
                                    <p>contacto@arrepentimientoamericalatina.com</p>
                                </div>
                            </div>

                        </div><!-- Widget end -->
                    </div><!-- Sidebar left end -->
                </div><!-- Sidebar col end -->

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h3 class="title-classic left">Contáctenos</h3>
                    <form action="/sendcontacto" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input class="form-control form-control-name" name="nombres" id="nombres" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control form-control-email" name="correo" id="correo"
                                           placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Asunto</label>
                                    <input class="form-control form-control-subject" name="asunto" id="asunto"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea class="form-control form-control-message" name="mensaje" id="mensaje" placeholder="" rows="10"></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Enviar</button>
                        </div>
                    </form>
                </div><!-- Col end -->

            </div><!-- Content row -->

            <div class="gap-60"></div>

            <div id="map" class="map"></div>

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
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