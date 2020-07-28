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
                <h1 class="display-3">Herzlich Willkommen</br>
                bei Design51</br>
                Ihrer Webagentur</h1>
                <a href="#Leistungen" type="button" class="cta">Leistungen</a>
            </div>

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- End Willkommen Section  -->


<!-- Leistungens Section -->
<section id="Leistungen" class="my-5">
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase text-center">Leistungen</h1>
        </div><!--end col-->

        <!-- leiste 1 -->
        <div class="row">
            <div class="col-md-6 bg-secondary ">
                <div class="Leistungen-info">
                <h1>Webdesign</h1>
                <h2>Coding is Love</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, 
                    accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!
                </p>
                </div>

            </div><!--end col-->

            <div class="col-md-6 p-0">
                <div class="Leistungen-img">
                <img src="{{asset('/assets/img/bg/design51.jpg')}}" class="img-fluid" alt="img">
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <!-- leiste 2 -->
        <div class="row">
        <div class="col-md-6 p-0">
                <div class="Leistungen-img">
                <img src="{{asset('/assets/img/bg/laptop.jpg')}}" class="img-fluid" alt="img">
                </div>
            </div><!--end col-->

            <div class="col-md-6 bg-secondary ">
                <div class="Leistungen-info">
                <h1>Corporate Design</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
            </div>

            </div><!--end col-->


        </div><!--end row-->
        
        <!-- leiste -->
        <div class="row">
            <div class="col-md-6 bg-secondary ">
                <div class="Leistungen-info">
                <h1>SEO</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
         
            </div>

            </div><!--end col-->

            <div class="col-md-6 p-0">
                <div class="Leistungen-img">
                <img src="{{asset('/assets/img/bg/sicherheit.jpg')}}" class="img-fluid" alt="img">
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <!-- leiste -->
        <div class="row">
        <div class="col-md-6 p-0">
                <div class="Leistungen-img">
                <img src="{{asset('/assets/img/bg/laptop.jpg')}}" class="img-fluid" alt="img">
                </div>
            </div><!--end col-->

            <div class="col-md-6 bg-secondary ">
                <div class="Leistungen-info">
                <h1>IT Sicherheit</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          
            </div>

            </div><!--end col-->


        </div><!--end row-->

        <!-- leiste -->
        <div class="row">
            <div class="col-md-6 bg-secondary ">
                <div class="Leistungen-info">
                <h1>Online Marketing</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
         
            </div>

            </div><!--end col-->

            <div class="col-md-6 p-0">
                <div class="Leistungen-img">
                <img src="{{asset('/assets/img/bg/design51.jpg')}}" class="img-fluid" alt="img">
                </div>
            </div><!--end col-->
        </div><!--end row-->        

    </div><!--end row-->
</div><!--end container-->
</section>
<!--end Leistungens Section -->

<section id="ueber" class="my-5 py-5">
<div class="container">
    <div class="row">
        <div class="col">
        <h1 class="section-title text-center"><span>ÜBER</span> UNS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, 
            doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!
        </p>
        </div><!--end col-->
    </div><!--end row-->

<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
            <div class="icon"><img src="{{asset('assets/img/icons/icon2.png')}}"></div>
            <h5 class="card-title">Markus</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
            <div class="icon"><img src="{{asset('assets/img/icons/icon2.png')}}"></div>
            <h5 class="card-title">Steve</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
            <div class="icon"><img src="{{asset('assets/img/icons/icon2.png')}}"></div>
            <h5 class="card-title">Hans</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card text-white bg-secondary mb-3">
        <div class="card-body">
            <div class="icon"><img src="{{asset('assets/img/icons/icon2.png')}}"></div>
            <h5 class="card-title">Peter</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        </div>
    </div>

</div>

</div><!--end container-->
</section>

<!-- Kontakt Section -->
<section id="kontakt" class="mb-5">
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="text-uppercase">KontaktBereich</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col">
        
            <form method="post" action="{{route('contact.send')}}">
                @csrf
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="firstName" placeholder="Vorname">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lastName" placeholder="Nachname">
                    </div>

                    <div class="col">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail" required>
                    </div>
                </div>

            <div class="form-row pt-2">
                <div class="col">
                    <textarea class="form-control" name="message" rows="4" placeholder="Nachricht" required></textarea>
                    <button type="submit" class="btn btn-outline-secondary btn-block mt-2">Senden</button>
                </div>
            </div>

            </form>
        </div>
    </div>

</div><!--end container-->
</section>
<!-- Kontakt Ende -->
@include('modules.footer.footer')
@endsection 