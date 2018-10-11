@extends('layouts.app')

@section('title', 'Gracias')

@section('content')

    <div id="page-banner-area" class="page-banner-area">
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="error-page text-center">
                    <div class="error-message">
                        <h3>Gracias por su consulta.</h3>
                    </div>
                    <div class="error-body">
                        Lo estaremos contactando para resolver sus dudas bendiciones.<br>
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