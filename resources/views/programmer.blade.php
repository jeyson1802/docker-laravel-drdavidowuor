@extends('layouts.app')

@section('title', 'Programación')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    @include('programmersection')

@endsection


@push('scripts')
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
@endpush