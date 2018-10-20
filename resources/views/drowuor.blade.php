@extends('layouts.app')

@section('title', 'Profeta Dr. David Owuor')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="ts-speaker-list clearfix">
                    <div class="col-xs-12 col-md-4">
                        <div class="ts-speaker-image">
                            <img class="img-responsive" src="images/speakers/drowuor.jpg" alt="" />
                        </div><!--Image end -->
                    </div><!-- Col end -->

                    <div class="col-xs-12 col-md-8">
                        <div class="ts-speaker-info">
                            <h3 class="ts-speaker-name">Profeta Dr. David Owuor</h3>
                            <p class="ts-speaker-designation">Profeta</p>
                            <div class="ts-speaker-bio">
                                <p>Profeta Dr. David Owuor nació en 1966 en el Distrito Bondo en Kenia. Estudió en la Universidad de Makerere (Uganda), la Universidad de Nairobi, (Kenya); la Universidad Ben Gurion del Negev (Israel), Universidad de Haifa (Israel), y la Universidad de Giessen, Instituto de Genética, (Alemania). Se especializó en ingeniería genética molecular, el examen de la clonación de ADN y análisis de secuencias de nucleótidos para el diseño de médicos de la droga y el descubrimiento.</p>

                                <p>Al terminar su doctorado de Monte Carmelo, Haifa (Israel) Dr. David Owuor se incorporó a la Universidad de Illinois en Chicago Medical Center (UIC), Centro de Biotecnología Farmacéutica como becario post doctoral especializada en la transducción de señales por el Cancer. Se unió al Departamento de Farmacia Ernesto Mario, Facultad de Farmacia de la Universidad Estatal de Nueva Jersey (Rutgers) y Salud Ambiental y Ocupacional del Instituto de Ciencias, (EOSHI) de la Universidad de Medicina y Odontología de Nueva Jersey (UMDNJ).</p>
                                    
                                <p>Fue durante este tiempo que el Señor Dios llamó al doctor Owuor a servir al rey Jesús y para contar a las cuatro esquinas de la tierra que se debe dar la espalda al pecado y preparar el camino para la Segunda Venida de Cristo, el Cordero de Dios. Ha impartido diversas profecías, entre las que se cuentan el tsunami asiático, los terremotos en Pakistán, Chile, Afganistán, Rusia e Irán; Katrina Huracanes de Estados Unidos, Rita y Wilma, inundaciones en el este de Europa, Mombasa, Australia, entre otros. Sorprendió a las naciones cuando profetizó los dos terremotos de Afganistán el sábado 21 de octubre 2005 en Machakos un pequeño pueblo del este de Kenia con la precisión cerrada a la fecha, así como el eclipse de la luna y el sol que tuvo lugar en octubre de 2005, entre otros.</p>
                            </div>
                            <ul class="ts-speaker-social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>                              
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