@extends('master')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-3">
                @include('layout.user-nav')
            </div>
            <div class="col-9">
                <div class="card border-primary mb-3">
                    <div class="card-body text-primary">
                        <div class="pl-3 pr-3 pb-3">
                            <h5 class="card-title">Obaveštenja</h5>
                            <p class="card-text">Ovde imate mogućnost da se prijavite ili odjavite sa sistema za slanje
                                obaveštenja. Obaveštenja možete primati na tri načina: putem SMS poruke, putem Emaila
                                ili putem Android/iOS aplikacije (<a href="#">možete je skinuti ovde</a>)</p>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card mb-3 border-light">
                        <div class="card-header">
                            <button class="btn-none" type="button" data-toggle="collapse"
                                    data-target="#card-1" aria-expanded="true" aria-controls="card-1">
                                Primanje obaveštenja
                            </button>
                        </div>
                        <div id="card-1" class="collapse show" aria-labelledby="card-one"
                             data-parent="#accordionExample">
                            <div class="card-body text-secondary">
                                <notification :email="'{{Auth::user()->Email}}'"
                                              :phone="'{{Auth::user()->Telefon}}'"
                                              :user_id="'{{Auth::user()->id}}'"
                                              :selected_ios="{{Auth::user()->subscribed->selected_ios}}"
                                              :selected_phone="{{Auth::user()->subscribed->selected_phone}}"
                                              :selected_email="{{Auth::user()->subscribed->selected_email}}"
                                ></notification>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-light">
                        <div class="card-header">
                            <button class="btn-none" type="button" data-toggle="collapse"
                                    data-target="#card-2" aria-expanded="false" aria-controls="card-2">
                                Servisi za obaveštenja
                            </button>
                        </div>
                        <div id="card-2" class="collapse show" aria-labelledby="card-two"
                             data-parent="#accordionExample">

                            <div class="card-body text-secondary">
                                <div class="pl-3 pb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="smsNoty">
                                        <label class="form-check-label" for="smsNoty">
                                            Elektrodistribucija
                                            <small><a href="tel:{{Auth::user()->Telefon}}">{{Auth::user()->Telefon}}</a>
                                            </small>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
