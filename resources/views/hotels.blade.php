@extends('layouts.app')

@section('title', 'Hoteles')

@section('content')

    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">        
    </div><!-- Page Banner end -->
    
    <section class="text-center text-sm-left well-sm section-border">
        <div class="container">
            <h1 class="text-bold text-center">Hoteles Afiliados</h1>
            <div class="row flow-offset-2">
                <article class="clients col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"><img src="/images/hotels/sheraton.png" alt=""></div>
                        <div class="col-sm-8 inset-xs">
                            <h5>Sheraton Lima Hotels</h5>
                            <p>La Ciudad de los Reyes. Sheraton Lima Hotel & Convention Center, un destello de riqueza cultural.</p><a target="_blank" href="http://www.sheratonlima.com/es" class="link text-primary">http://www.sheratonlima.com</a>
                        </div>
                    </div>
                </article>
                <article class="clients col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"><img src="/images/hotels/sheraton.png" alt=""></div>
                        <div class="col-sm-8 inset-xs">
                            <h5>Roosevelt Hotels & Suites</h5>
                            <p>Servicio personalizado, con un trato familiar que hará de su estadía una grata experiencia.</p><a target="_blank" href="https://hotelroosevelt.com/" class="link text-primary">https://hotelroosevelt.com/</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush