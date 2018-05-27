@extends('master')
@section('content')
    <div class="bg-primary">
        <div class="container">
            <div class="row nav-content">
                <div class="col-sm-3">
                    <img src="/img/korisnik.png" alt="" class="img-responsive image_header">
                </div>
                <div class="col-sm-8 nav_header_container">
                    <div class="nav_header">
                        <h1 class="display-4">KO SAM JA?</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-3">
            <div class="col-md-3">
                @include('layout.user-nav')
            </div>
            <div class="col-md-9">
                @php $user = Auth::user();
                    $dob = date('d.m.Y', strtotime($user->birthBook->DatumRodjenja));
                    $dobYear = date('Y', strtotime($user->birthBook->DatumRodjenja));
                    $dobNow = date('Y');
                    $now = new DateTime(date('d.m.Y'));
                    $addressLength = count($user->address);
                    $address = $user->address->get($addressLength-1);
                    $icDuration = new \Carbon\Carbon($user->identityCard->VaziDo);
                    $icRemaining = $icDuration->diffForHumans(new \Carbon\Carbon());
                $idExpire = new DateTime(date('d.m.Y', strtotime($user->identityCard->VaziDo)));
                @endphp

                <div
                    class="card mb-3 {{$now > $idExpire ? 'bg-danger text-white' : 'border-light'}}">
                    <div class="card-header">Lična karta
                        {{$now > $idExpire ? ' - Istekla ' . date('d.m.Y', strtotime($user->identityCard->VaziDo)) : ''}}
                    </div>
                    <div class="card-body text-secondary">


                        <div class="pl-3">
                            <ul class="list-unstyled">
                                <li><strong>Ime i prezime:</strong> {{$user->Ime}} {{$user->Prezime}}</li>
                                <li><strong>JMBG:</strong> {{$user->JMBG}}</li>
                                <li><strong>Datum rođenja:</strong> {{$dob}}
                                    <small>({{$dobNow-$dobYear}} godina/u)</small>
                                </li>
                                <li>
                                    <strong>Pol:</strong> {{$user->birthBook->Pol === 'Ž' ? 'Ženski' : 'Muški'}}
                                </li>
                                <li><strong>Adresa:</strong> {{$address->Ulica}} {{$address->Broj}}
                                    , {{$address->Opstina}}
                                    , {{$address->Mesto}}</li>
                                <li><strong>Broj lične karte:</strong> {{$user->identityCard->BrLicneKarte}}</li>
                                <li><strong>Dokument izdaje:</strong> {{$user->identityCard->DokumentIzdaje}}</li>
                                <li><strong>Datum izdavanja:</strong>
                                    {{date('d.m.Y', strtotime($user->identityCard->DatumIzdavanja))}}
                                </li>
                                <li><strong>Važi do:</strong>
                                    {{date('d.m.Y', strtotime($user->identityCard->VaziDo))}}
                                    <small> ({{$icRemaining}})</small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                @if($user->passport)
                    @php $passportExpire = new DateTime(date('d.m.Y', strtotime($user->passport->VaziDo))); @endphp
                    <div
                        class="card mb-3 {{$now > $passportExpire ? 'bg-danger text-white' : 'border-light'}}">
                        <div class="card-header">
                            Pasoš {{$now > $passportExpire ? ' - istekao ' . $passportExpire : ''}}</div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Broj pasoša:</strong> {{$user->passport->BrojPasosa}}
                                    </li>
                                    <li>
                                        <strong>Dokument izdaje:</strong> {{$user->passport->DokumentIzdaje}}
                                    </li>
                                    <li>
                                        <strong>Datum
                                            izdavanja:</strong> {{date('d.m.Y', strtotime($user->passport->DatumIzdavanja))}}
                                    </li>
                                    <li><strong>Važi do:</strong> {{date('d.m.Y', strtotime($user->passport->VaziDo))}}
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Pasoš
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <p>Trenutno nemate pasoš.</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if($user->driverLicence)
                    @php $driverLicenceExpire = new DateTime(date('d.m.Y', strtotime($user->driverLicence->DatumIsteka))); @endphp
                    <div
                        class="card mb-3 {{date('d.m.Y') > $driverLicenceExpire ? 'bg-danger text-white' : 'border-light'}}">
                        <div class="card-header">
                            Vozačka
                            dozvola {{date('d.m.Y') > $driverLicenceExpire ? ' - Istekla ' . $driverLicenceExpire : ''}}
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <ul class="list-unstyled">
                                    <li><strong>
                                            Broj vozačke dozvole:
                                        </strong> {{$user->driverLicence->BrVozackeDozvole}}</li>
                                    <li><strong>Datum
                                            izdavanja:</strong> {{date('d.m.Y', strtotime($user->driverLicence->DatumIzdavanja))}}
                                    </li>

                                    <li><strong>Datum
                                            važenja:</strong> {{date('d.m.Y', strtotime($user->driverLicence->DatumIsteka))}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Vozačka dozvola
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <p>Trenutno nemate vozačku dozvolu.</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if($user->pension)
                    <div class="card mb-3 border-light">
                        <div class="card-header">
                            Penziono invalidsko osiguranje (PIO)
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Vrsta:</strong> {{$user->pension->Vrsta}}
                                    </li>
                                    <li>
                                        <strong>Datum početka
                                            isplate:</strong> {{date('d.m.Y', strtotime($user->pension->DatPocetkaIsplate))}}
                                    </li>
                                    <li>
                                        <strong>Filijala:</strong> {{$user->pension->Filijala}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Penziono invalidsko osiguranje (PIO)
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <p>Trenutno niste u evidenciji PIO.</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div
                    class="card mb-3 border-light">
                    <div class="card-header">
                        Matična knjiga rođenih
                    </div>
                    <div class="card-body text-secondary">
                        <div class="pl-3">
                            <ul class="list-unstyled">
                                <li>
                                    <strong>Ime i
                                        prezime:</strong> {{$user->birthBook->Ime}} {{$user->birthBook->Prezime}}
                                </li>
                                <li>
                                    <strong>Datum
                                        rođenja:</strong> {{date('d.m.Y', strtotime($user->birthBook->DatumRodjenja))}}
                                </li>
                                <li><strong>Ime oca:</strong> {{$user->birthBook->ImeOca}}</li>
                                <li><strong>Ime majke:</strong> {{$user->birthBook->ImeMajke}}</li>
                                <li><strong>Mesto rođenja:</strong> {{$user->birthBook->MestoRodjenja}}</li>
                                <li><strong>Opština rođenja:</strong> {{$user->birthBook->OpstinaRodjenja}}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                @if($user->marriageBook)
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Matična knjiga venčanih
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <strong>Opština:</strong> {{$user->marriageBook->Opstina}}
                                    </li>
                                    <li><strong>Matično područje:</strong> {{$user->marriageBook->MaticnoPodrucje}}
                                    </li>
                                    <li><strong>Tekući broj:</strong> {{$user->marriageBook->TekuciBroj}}
                                    </li>
                                    <li><strong>Godina upisa:</strong> {{$user->marriageBook->GodUpisa}}
                                    </li>
                                    <li><strong>Mesto zaključenje
                                            braka:</strong> {{$user->marriageBook->MestoZakljucenjaBraka}}
                                    </li>
                                    <li><strong>Datum zaključenja
                                            braka:</strong> {{date('d.m.Y', strtotime($user->marriageBook->DatZakljucenjaBraka))}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Matična knjiga venčanih
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <p>Trenutno niste u evidenciji matične knjige venčanih</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if($user->employment)
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Nacionalna služba zapošljavanja
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <ul class="list-unstyled">
                                    <li><strong>Status:</strong> {{$user->employment->Status}}</li>
                                    <li><strong>Datum izmene
                                            statusa:</strong> {{date('d.m.Y', strtotime($user->employment->DatumStatusa))}}
                                    </li>
                                    {{--                                    <li><strong>Status:</strong>{{$user->employment->VremeStatusa}}</li>--}}
                                    {{--<li><strong>Status:</strong>{{$user->employment->DatumEvidencije}}</li>--}}
                                    <li><strong>Filijala:</strong> {{$user->employment->OJEvidencije}}</li>
                                    <li><strong>Obrazovni profil:</strong> {{$user->employment->ObrazovniProfil}}</li>
                                    <li><strong>Prima novčanu
                                            naknadu:</strong> {{$user->employment->NovcanaNaknada ? 'Da' : 'Ne'}}</li>
                                    <li><strong>Iznos novčane
                                            naknade:</strong> {{$user->employment->IznosNovcaneNaknade ? : '/'}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="card mb-3 border-light">
                        <div class="card-header">
                            Nacionalna služba zapošljavanja
                        </div>
                        <div class="card-body text-secondary">
                            <div class="pl-3">
                                <p>Trenutno niste u evidenciji nacionalne službe za zapošljavanje.</p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@stop
