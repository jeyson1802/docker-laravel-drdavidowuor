@extends('layouts.app')

@section('title', 'Hoteles')

@section('class-header', 'subpage_header')

@section('slider')
    <div data-autoplay="5000" data-slide-effect="fade" data-loop="false" class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div data-slide-bg="images/header-1.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-3.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-4.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="text-center text-sm-left well well-sm section-border">
        <div class="container">
            <h1 class="text-bold text-center">Hoteles Afiliados</h1>
            <div class="row flow-offset-2">
                <article class="clients col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"><img src="images/sheraton-logo.png" alt=""></div>
                        <div class="col-sm-8 inset-xs">
                            <h5>Sheraton Lima Hotels</h5>
                            <p>La Ciudad de los Reyes. Sheraton Lima Hotel & Convention Center, un destello de riqueza cultural.</p><a target="_blank" href="http://www.sheratonlima.com/es" class="link text-primary">http://www.sheratonlima.com</a>
                        </div>
                    </div>
                </article>
                <article class="clients col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"><img src="images/roosevelt-logo.png" alt=""></div>
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