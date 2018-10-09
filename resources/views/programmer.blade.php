@extends('layouts.app')

@section('title', 'Programación')

@section('content')

    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">        
    </div><!-- Page Banner end -->

    @include('programmersection')

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush