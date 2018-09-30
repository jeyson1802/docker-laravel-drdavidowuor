@extends('layouts.app')

@section('title', '500')

@section('content')
    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2></h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="error-page text-center">
                    <div class="error-message">
                        <h3>Oops... Ocurrió un problema en la página. Vuelva a intentarlo.</h3>
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