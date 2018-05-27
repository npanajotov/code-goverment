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
                        <h1 class="display-4">Prijava na sistem</h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-lg-4 pt-3">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {!! $error !!}
                    </div>
                @endforeach
            @endif
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Prijava</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Registracija</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-3">
                <div class="tab-pane container active" id="home">
                    <form method="POST" action="{{route('login')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">Korisničko ime</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Korisničko ime" value="{{old('username')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Lozinka</label>
                            <input type="password" class="form-control" name="password" id="Password"
                                   placeholder="******">
                        </div>
                        {{--<div class="form-group form-check">--}}
                        {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                        {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-primary">Prijavite se</button>
                    </form>
                </div>
                <div class="tab-pane container fade" id="menu1">
                    <form method="POST" action="{{route('register')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">Korisničko ime</label>
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="Korisničko ime" value="{{old('username')}}">
                        </div>
                        <div class="form-group">
                            <label for="JMBG">JMBG</label>
                            <input type="text" class="form-control" id="JMBG" name="JMBG"
                                   placeholder="JMBG" value="{{old('JMBG')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Lozinka</label>
                            <input type="password" class="form-control" name="password" id="Password"
                                   placeholder="******">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Lozinka</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="******">
                        </div>
                        {{--<div class="form-group form-check">--}}
                        {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                        {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-primary">Registrujte se</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
