@extends('master')
@section('content')
    <div class="bg-primary">
        <div class="container">
            <div class="row nav-content">
                <div class="col-sm-3">
                    <img src="img/naslovna.png" alt="" class="img-responsive image_header" style="width:200px">
                </div>
                <div class="col-sm-8 nav_header_container">
                    <div class="nav_header">
                        <h1 class="display-4">DRŽAVA NA KLIK</h1>
                        <p class="lead">Postanite deo digitalne Srbije</p>
                        <p class="lead">
                            Mesto gde građani Srbije imaju brz i lak pristup formalnostima potrebnim za obavljanje
                            životnih aktivnosti.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container section1">
            <div class="row">
                <div class="col-md-4">
                    <div class="list">
                        <img src="/img/icon_profile.png" class="image_width" alt="">
                        <p><strong>Lična doumenta</strong></p>
                        <p class="body-text">Lična dokumenta su javne isprave kojima gradjani Republike Srbije
                            dokazuju identitet</p>
                        <ul>
                            <li class="body-text">Lična karta</li>
                            <li class="body-text">Biometrijska lična karta</li>
                            <li class="body-text">Izvod iz matične knjige rođenih</li>
                            <li class="body-text">Pasoš</li>
                        </ul>
                        <button class="btn btn-primary">SAZNAJ VIŠE</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list">
                        <img src="/img/icon_car.png" class="image_width" alt="">
                        <p><strong class="strong-text">Saobraćajna dokumenta</strong></p>
                        <p class="body-text">Lična dokumenta su javne isprave kojima gradjani Republike Srbije
                            dokazuju identitet</p>
                        <ul>
                            <li class="body-text">Saobraćajna dokumenta</li>
                            <li class="body-text">Biometrijska lična karta</li>
                            <li class="body-text">Izvod iz matične knjige rođenih</li>
                            <li class="body-text">Pasoš</li>
                        </ul>
                        <button class="btn btn-primary">SAZNAJ VIŠE</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list">
                        <img src="/img/icon_pass.png" class="image_width" alt="">
                        <p><strong class="strong-text">Putne isprave</strong></p>
                        <p class="body-text">Lična dokumenta su javne isprave kojima gradjani Republike Srbije
                            dokazuju identitet</p>
                        <ul>
                            <li class="body-text">Lična karta</li>
                            <li class="body-text">Biometrijska lična karta</li>
                            <li class="body-text">Izvod iz matične knjige rođenih</li>
                            <li class="body-text">Pasoš</li>
                        </ul>
                        <button class="btn btn-primary">SAZNAJ VIŠE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary section2" style="padding:30px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="lead">Kako da koristite portal eUprava?</h3>
                </div>
                <div class="col-md-4">
                    <h1>1</h1>
                    <h4 class="lead"><strong>Kreiranje profila</strong></h4>
                    <ul style="color:white; padding-left:15px">
                        <li>Nakon unosa potrebnih podataka na Vašu email adresu stiže potvrdni email</li>
                        <li>Klikom na link, otvoriće se strana za pristup sistemu</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h1>2</h1>
                    <h4 class="lead"><strong>Upravljanje platformom</strong></h4>
                    <ul style="color:white; padding-left:15px">
                        <li>Na svom nalogu možete da vidite vesti, obaveštenja, kalendar, da zakažete usluge</li>
                        <li>Popunjavajte elektronski formulare</li>
                        <li>Pretražujete fajlove i dokumenta</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h1>3</h1>
                    <h4 class="lead"><strong>Budite obavešteni</strong></h4>
                    <ul style="color:white; padding-left:15px">
                        <li>Na naslovnoj strani profila imaćete najvažnija obaveštenja</li>
                        <li>Odaberite način na koji želite da primate obaveštenja od eUprave</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@stop
