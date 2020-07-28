  <header class="">
<!--Start Navigation ========================================================================-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

            <a href="{{route('home.home')}}" class="navbar-brand">
                <img src="{{asset('assets/img/logo/logo_design_51.png')}}" alt=""  title="Bootstrap"  height="32" >
            </a>

            <button type="button" class="navbar-toggler btn-round" data-toggle="collapse" data-target="#navbar-toggle" aria-controls="navbar-toggle">
                <img src="{{asset('assets/icons/justify.svg')}}" alt=""  title="Bootstrap" width="32" height="32">
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-toggle">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('home.home')}}" class="nav-link text-uppercase">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('home.home')}}#Leistungen" class="nav-link text-uppercase">Leistungen</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('home.home')}}#ueber" class="nav-link text-uppercase">Über Uns</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('home.home')}}#kontakt" class="nav-link text-uppercase">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div><!--end container-->
    </nav>
    <!--End Navigation ========================================================================-->
    </header>
