@extends('layouts.app')

@section('title', 'Gracias')

@section('content')

    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="error-page text-center">
                    <div class="error-message">
                        <h3>Gracias por su registro.</h3>
                    </div>
                    <div class="error-body">
                        Le hemos enviado un correo con el detalle del registro bendiciones.<br>
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