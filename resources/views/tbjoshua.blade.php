@extends('layouts.app')

@section('title', 'TB Joshua')

@section('content')
    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/tbjoshua.png)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Tb. Joshua</h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="ts-speaker-list clearfix">
                    <div class="col-xs-12 col-md-4">
                        <div class="ts-speaker-image">
                            <img class="img-responsive" src="images/speakers/tbjoshua.png" alt="" />
                        </div><!--Image end -->
                    </div><!-- Col end -->

                    <div class="col-xs-12 col-md-8">
                        <div class="ts-speaker-info">
                            <h3 class="ts-speaker-name">Tb. Joshua</h3>
                            <p class="ts-speaker-designation">Profeta</p>
                            <div class="ts-speaker-bio">
                                <p>T.B. Joshua es el Supervisor General de La Sinagoga, Iglesia De Todas Las Naciones (SCOAN). ¡El fundador es Jesucristo! Él es sólo uno de los que se han sometido humildemente a la voluntad de Dios (Isaías 6:8).</p>
                                <p>Nacido el 12 de junio de 1963 en el Estado de Ondo, Nigeria, el viaje de TB Joshua es una humilde historia acerca de cómo Dios levantó a un joven de un hogar pobre para dirigir un ministerio internacional que atrae a miles de personas de todo el mundo para presenciar la realidad del poder de Dios. </p>
                                <p>De abandonar la escuela secundaria en su primer año hasta llegar a trabajar en una granja de aves de corral; de enseñarle a niños pequeños mientras asistía a clases nocturnas hasta lavar los pies de la gente en las calles lodosas de Lagos; de ayunar cuarenta días para recibir un llamado divino y empezar un ministerio con sólo ocho miembros, la vida de T.B. Joshua es una historia de una asombrosa gracia y un enfoque inquebrantable. Hoy, él es el mentor de presidentes, amigo de las viudas y los menos privilegiados, un ejemplo para su generación como también un hombre humilde y trabajador, esforzándose incansablemente por el avance del Reino de Dios. Su historia es una motivación de que hay esperanza para-el debíl.</p>
                            </div>
                            <ul class="ts-speaker-social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="ts-speaker-session">
                                <h4 class="session-title">Sesión: Liberación, Milagros y Sanidades</h4>
                                <p>El profeta Tb. Joshua impartirá con la unción del Espíritu Santo, impartirá sanidad, milagros y liberación.</p>
                            </div>
                        </div><!-- Info end -->
                    </div><!-- Col end -->
                </div><!-- Speaker list 1 end -->
            </div><!-- Speaker row 1 -->


        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush