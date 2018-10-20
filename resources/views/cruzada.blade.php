@extends('layouts.app')

@section('title', 'Conferencia')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="title-classic left">¿Qué sucederá en el evento?</h3>
                    <p class="sppb-cta-text">	El cuerpo de Cristo necesita ser liberado de toda opresión. En la cruzada de avivamiento por el Profeta Dr. David Owuor tendremos una sesión de arrepentimento con poder. Seremos libres por el poder de Cristo nuestro Señor.
                    </p>
                    <blockquote>El Espíritu del Señor está sobre mí, Por cuanto me ha ungido para dar buenas nuevas a los pobres; Me ha enviado a sanar a los quebrantados de corazón; A pregonar libertad a los cautivos, Y vista a los ciegos; A poner en libertad a los oprimidos - Lucas 4:18</blockquote>
                    <p>El Profeta Dr. David Owuor impartirá bendición y unción sobre los invitados de la conferencia, esto traerá un cambio a la nación de Perú..</p>
                </div><!-- Col end -->

                <div class="col-md-6">                    

                    <div class="feature-box">
						<span class="feature-box-icon">
							<i class="fa fa-stack-overflow"></i>
						</span>
                        <div class="feature-box-content">
                            <h3 class="feature-title">Sanidad</h3>
                            <p>El Profeta Dr. David Owuor tendrá una sesión de oración por sanidad, cada pastor podrá ser libre de toda enfermdad que el enemigo haya querido poner sobre sus vidas, para así poder liberar al pueblo de Cristo.</p>
                        </div>
                    </div><!-- Feature box 2 end -->

                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

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

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush