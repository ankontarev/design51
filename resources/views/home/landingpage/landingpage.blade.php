@extends('theme.theme')
@section('title', 'Your Homepage')
@section('description', 'Your Homepage Description here')

@section('content')


@if(Session::has('cookiesetting'))
@else
    @include('modules.cookiebar.cookiebar')
@endif


@include('modules.navigation.navigation')


<section  class="parallax mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>

<section  class="bg-light">
    <div class="container">
        <div class="row">
            <!-- col-->
            <div class="col-lg-4 minus-mt-3">
                 <!-- card -->
                <div class="card text-white bg-dark" >
                    <div class="card-header">Header</div>
                    <div class="card-body">
                      <h5 class="card-title">Dark card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-->
            
            <!-- col-->
            <div class="col-lg-4 minus-mt-3">
                <!-- card -->
                <div class="card text-white bg-dark">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-->
            
            <!-- col-->
            <div class="col-lg-4 minus-mt-3">
                <!-- card -->
               <div class="card text-white bg-dark" >
                   <div class="card-header">Header</div>
                   <div class="card-body">
                     <h5 class="card-title">Dark card title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div><!-- end card -->
           </div><!-- end col-->
        </div><!-- end row-->
    </div><!-- end container-->
</section>

<section  class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="blafont">Blafont</h1>
                <h1 class="">Blafont</h1>
                <h1 class="font-roboto">Blafont</h1>
            </div><!-- end col-->
        </div><!-- end row-->
    </div><!-- end container-->
</section>

<section  class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col"></div>
                <h1>Content Here</h1>
            </div>
        </div>
    </div>
</section>

<section  class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Content Here</h1>

            </div>
        </div>
    </div>
</section>
@include('modules.footer.footer')
@endsection 