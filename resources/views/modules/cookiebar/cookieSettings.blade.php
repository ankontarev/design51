@extends('theme.theme')
@section('title', 'Cookie Einstellungen')
@section('description', 'Hier können sie die Cookies Einstellen')

@section('content')

@if(Session::has('cookiesetting'))
@else
    @include('modules.cookiebar.cookiebar')
@endif

@include('modules.navigation.navigation')

<section class="py-4">
    <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-sm-12 col-md-12">



            <h5 class="text-center text-uppercase pb-4">Cookie-Einstellungen</h5>

            <div class="row">
                <div class="col">
                    <p class="text-muted">
                    Wir nutzen Cookies auf unserer Website. Einige von ihnen sind essenziell, während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern.
                    Sie können die nicht notwendigen Cookies akzeptieren oder per Klick auf die Schaltfläche ablehnen sowie diese 
                    Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website).

                    </p>
                    <a href="{{route('cookie.saveAll')}}" class="btn btn-primary btn-lg btn-block mt-3">Alle akzeptieren</a>
                </div><!--end col -->
                <div class="col-4">

                    <form method="post" action="{{route('cookie.saveCustom')}}" >
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled checked>
                            <label class="form-check-label" for="defaultCheck2">Essenziell</label>
                        </div>


                        @if(Session::has('cookiesetting'))

                        @if ($message = Session::get('cookiesetting'))

                            @if($message['stats'] == 1 )
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="stats" checked>
                                <label class="form-check-label" for="defaultCheck1">Statistiken</label>
                                </div>
                            @else
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="stats">
                                <label class="form-check-label" for="defaultCheck1">Statistiken</label>
                                </div>
                            @endif


                            @if($message['marketing'] == 1 )
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="marketing" checked>
                            <label class="form-check-label" for="defaultCheck1">Marketing</label>
                            </div>
                            @else
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="marketing">
                            <label class="form-check-label" for="defaultCheck1">Marketing</label>
                            </div>
                            @endif

                            @if($message['medien'] == 1 )
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="medien" checked>
                            <label class="form-check-label" for="defaultCheck1">Externe Medien</label>
                            </div>
                            @else
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="medien">
                            <label class="form-check-label" for="defaultCheck1">Externe Medien</label>
                            </div>
                            @endif




                        @endif

                        @else
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="stats">
                            <label class="form-check-label" for="defaultCheck1">Statistiken</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="marketing">
                            <label class="form-check-label" for="defaultCheck1">Marketing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="medien">
                            <label class="form-check-label" for="defaultCheck1">Externe Medien</label>
                        </div>

                        @endif




                        <button class="btn btn-outline-secondary btn-sm mt-2" type="submit">Speichern</button>
                        <a href="{{route('cookie.delet')}}" class="btn btn-outline-secondary btn-sm mt-2">Alles Löschen</a>

                    </form>
                    
                </div><!--end col -->
            </div><!--end row -->

    </div><!--end col -->
</div><!--end row -->
    </div><!--end container-->
</section>

@include('modules.footer.footer')
@endsection 