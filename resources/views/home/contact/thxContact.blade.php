@extends('theme.theme')
@section('title', 'Your Homepage')
@section('description', 'Your Homepage Description here')

@section('content')

@if(Session::has('cookiesetting'))
@else
    @include('modules.cookiebar.cookiebar')
@endif


<!-- Willkommen Section  -->
<section id="willkommen">
@include('modules.navigation.navigation51')
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-12 align-self-center">

            <div class="hero-text text-white mb-5">
                <h1 class="display-3">Danke wir haben Ihre Anfrage erhalten.</br> </h1>

            </div>

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End Willkommen Section  -->



<!-- Kontakt Ende -->
@include('modules.footer.footer')
@endsection 