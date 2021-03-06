<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container"><a class="navbar-brand" href="/">
            <img src="/img/logo.png" alt="" style="width:290px; margin-bottom:-5px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02" style="position: relative;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{url()->current()  == route('home') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('home')}}">Početna <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{url()->current()  == route('dashboard') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('dashboard')}}">Moja eUprava</a>
                </li>
                <li class="nav-item {{url()->current()  == route('services') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('services')}}">eUsluge</a>
                </li>
                <li class="nav-item {{url()->current()  == route('help') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('help')}}">Pomoć</a>
                </li>
                <li class="nav-item {{url()->current()  == route('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
                </li>
            </ul>
            <div class="lang">
                <div id="cirilica">Ћир</div>
                <div id="latinica">Lat</div>
            </div>
            <div class="form-inline" id="search-btn">
                <button class="btn btn-outline-light"><i class="fa fa-search"></i></button>
            </div>
        </div>

    </div>

</nav>
<div class="container search-box-container">
    <div class="search-box">
        <form class="form-inline" id="search-form" action="{{route('search')}}">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Unesite pojam..."
                   aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>
                Pretraga
            </button>
        </form>
    </div>
</div>

