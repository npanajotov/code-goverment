@extends('master')
@section('content')
    <div class="bg-primary">
        <div class="container">
            <div class="row nav-content">
                <div class="col-sm-3">
                    <img src="/img/vesti.png" alt="" class="img-responsive image_header" style="margin-top:40px;">
                </div>
                <div class="col-sm-8 nav_header_container">
                    <div class="nav_header">
                        <h1 class="display-4">eForma</h1>
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
                <div class="card border-primary mb-3">
                    <div class="card-body text-primary">
                        <div class="pl-3 pr-3 pb-3">
                            <h5 class="card-title">eForma - Promena prebivališta</h5>
                            <p class="card-text">Ovde imate mogućnost da se zatražite promenu prebivališta. Potrebno je
                                da unesete novu adresu i da uputite zahtev. Nadležni organ će u roku od 30 dana izaći na
                                novu adresu koju ste uneli i napisati
                                zapisnik. Nakon toga ćete biti obavešteni putem SMS poruke, Email-a ili putem
                                notifikacije na mobilnom telefonu o daljim koracima.</p>
                            <small class="text-danger"><i class="fa fa-warning"></i> Ova opcija moguća je samo za
                                građane koji imaju licnu kartu sa čipom!
                            </small>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 border-light">
                    <div class="card-header">
                        Prijava - odjava prebivališta (promena adrese stana)
                    </div>
                    @php
                        $user = Auth::user();
                            $addressLength = count($user->address);
                     $address = $user->address->get($addressLength-1);
                    @endphp

                    <div class="card-body text-secondary">
                        <div class="pl-3 pb-3 pr-3">
                            <p>
                                <strong>Trenutno prebivalište:</strong><br>
                                {{$address->Ulica}} {{$address->Broj}}, {{$address->Opstina}}, {{$address->Mesto}}.
                            </p>
                            <newaddress :is_requested="'{{isset($user->requestAddress) ? true : false}}'"
                                        :user_id="'{{Auth::user()->id}}'"></newaddress>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@stop
