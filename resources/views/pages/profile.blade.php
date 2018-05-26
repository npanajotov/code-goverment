@extends('master')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-3">
                @include('layout.user-nav')
            </div>
            <div class="col-9">
                <div class="pt-3 pb-3">
                    <form method="POST" action="{{route('profile')}}">
                        {{csrf_field()}}
                        <div class="card border-light mb-3">
                            <div class="card-header">Osnovni podaci</div>
                            <div class="card-body text-secondary">
                                <div class="pl-3">
                                    <div class="form-group row">
                                        <label for="Ime" class="col-sm-2 col-form-label">Ime:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Ime" name="Ime"
                                                   placeholder="Unesite ime"
                                                   value="{{old('Ime') ? old('Ime') : Auth::user()->Ime}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Prezime" class="col-sm-2 col-form-label">Prezime:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Prezime" name="Prezime"
                                                   placeholder="Unesite prezime"
                                                   value="{{old('Prezime') ? old('Prezime') : Auth::user()->Prezime}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="JMBG" class="col-sm-2 col-form-label">JMBG:</label>
                                        <div class="col-sm-10">
                                            <input type="text" disabled class="form-control" id="JMBG" name="JMBG"
                                                   placeholder="Unesite JMBG"
                                                   value="{{Auth::user()->JMBG}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="KorisnickoIme" class="col-sm-2 col-form-label">Korisničko
                                            ime:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="KorisnickoIme"
                                                   name="KorisnickoIme"
                                                   placeholder="Unesite korisničko ime"
                                                   value="{{old('KorisnickoIme') ? old('KorisnickoIme') : Auth::user()->KorisnickoIme}}">
                                        </div>
                                    </div>
                                    <hr>
                                    <h6>Promena emaila </h6>
                                    <div class="form-group row">
                                        <label for="Email" class="col-sm-2 col-form-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="Email" name="Email"
                                                   placeholder="Unesite email"
                                                   value="{{old('email') ? old('email') : Auth::user()->Email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_email" class="col-sm-2 col-form-label">Novi email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="new_email" name="new_email"
                                                   placeholder="Unesite email"
                                                   value="{{old('new_email') ? old('new_email') : ''}}">
                                        </div>
                                    </div>
                                    <small>Nakon unosa novog emaila, dobićete link za potvrdu promene emaila.</small>

                                    <hr>
                                    <h6>Promena lozinke</h6>
                                    <div class="form-group row">
                                        <label for="old_password" class="col-sm-2 col-form-label">Stara lozinka:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="old_password"
                                                   name="old_password"
                                                   placeholder="******">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Nova lozinka:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password"
                                                   name="password"
                                                   placeholder="******">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password_confirmation" class="col-sm-2 col-form-label">Ponovite
                                            lozinku:</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password_confirmation"
                                                   name="password_confirmation"
                                                   placeholder="******">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-light mb-3">
                            <div class="card-header">Prebivalište</div>
                            <div class="card-body text-secondary">
                                <div class="pl-3 pb-3">
                                    @php $user = Auth::user();  $addressLength = count($user->address);
                    $address = $user->address->get($addressLength-1); @endphp
                                    <div class="form-group row">
                                        <label for="Ulica" class="col-sm-2 col-form-label">Ulica:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" disabled name="Ulica" id="Ulica"
                                                   placeholder="Unesite ulicu"
                                                   value="{{$address->Ulica}} {{$address->Broj}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Opstina" class="col-sm-2 col-form-label">Opstina:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" disabled name="Opstina" id="Opstina"
                                                   placeholder="Unesite opstinu"
                                                   value="{{$address->Opstina}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Mesto" class="col-sm-2 col-form-label">Mesto:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" disabled name="Mesto" id="Mesto"
                                                   placeholder="Unesite mesto"
                                                   value="{{$address->Mesto}}">
                                        </div>
                                    </div>
                                    <a href="#">Uputi zahtev za promenu prebivališta</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sačuvajte izmene</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
