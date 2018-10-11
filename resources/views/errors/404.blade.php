@extends('layouts.app')

@section('title', '404')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="error-page text-center">
                    <div class="error-code">
                        <h2><strong>404</strong></h2>
                    </div>
                    <div class="error-message">
                        <h3>Oops... No se ha encontrado la página.</h3>
                    </div>
                    <div class="error-body">
                        Dar click al siguiente botón para ir a la página de Inicio <br>
                        <a href="./" class="btn btn-primary">Regresar al Inicio</a>
                    </div>
                </div>

            </div><!-- Content row -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush