@extends('layouts.app')

@section('title', 'Programación')

@section('content')
    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/tbjoshua.png)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Programación</h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Page Banner end -->

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
                                            <img class="schedule-slot-speakers" src="images/speakers/tbjoshua.png" alt="" />
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
                                            <img class="schedule-slot-speakers" src="images/speakers/tbjoshua.png" alt="" />
                                        </a>
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-speaker-name">Tb. Joshua</h3>
                                            <h4 class="schedule-slot-title">El poder de la palabra</h4>
                                            <p class="schedule-slot-desc">Tb. Joshua impartirá la importancia del poder de la palabra.</p>
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
                                            <img class="schedule-slot-speakers" src="images/speakers/tbjoshua.png" alt="" />
                                        </a>
                                        <div class="schedule-slot-info-content">
                                            <h3 class="schedule-slot-speaker-name">Tb. Joshua</h3>
                                            <h4 class="schedule-slot-title">Sesión de Liberación</h4>
                                            <p class="schedule-slot-desc">Tb. Joshua tendrá un sesión de liberación, sanidad y milagros.</p>
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

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush