<div id="overlay">
<div class="row justify-content-md-center">
    <div class="col-sm-11 col-md-6">
        <div class="card m-2">
            <div class="card-body pb-0">
            <h5 class="text-center text-uppercase pb-4">Cookie-Einstellungen</h5>

            <div class="row">
                <div class="col">
                    <p class="card-text text-muted">
                    Wir nutzen Cookies auf unserer Website. Einige von ihnen sind essenziell, während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern.
                    Sie können die nicht notwendigen Cookies akzeptieren oder per Klick auf die Schaltfläche ablehnen sowie diese 
                    Einstellungen jederzeit aufrufen und Cookies auch nachträglich jederzeit abwählen (z.B. im Fußbereich unserer Website).

                    </p>
                </div><!--end col -->

                <div class="col-4">

                    <form method="post" action="{{route('cookie.saveCustom')}}" >
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled checked>
                            <label class="form-check-label" for="defaultCheck2">Essenziell</label>
                        </div>
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
                        <button class="btn btn-outline-secondary btn-sm mt-2" type="submit">Speichern</button>

                    </form>
                    
                </div><!--end col -->
            </div><!--end row -->

            <a href="{{route('cookie.saveAll')}}" class="btn btn-primary btn-lg btn-block mt-3">Alle akzeptieren</a>
            <ul class="list-inline text-muted text-center mb-0 py-0">
                <li class="list-inline-item"><a class="btn btn-link" href="#" role="button"><small>Individuelle Cookie Einstellungen</small></a></li>
                <li class="list-inline-item"><small> | </small></li>
                <li class="list-inline-item"><a class="btn btn-link" href="#" role="button"><small>Impressum</small></a></li>
                <li class="list-inline-item"><small> | </small></li>
                <li class="list-inline-item"><a class="btn btn-link" href="#" role="button"><small>Datenschutz</small></a></li>
            </ul>

            </div><!--end card body -->
        </div><!--end card  -->
    </div><!--end col -->
</div><!--end row -->
</div><!--end overlay -->