@extends('master')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-4 pt-3">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {!! $error !!}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="username">Korisničko ime</label>
                    <input type="text" class="form-control" id="username" name="username"
                           placeholder="Korisničko ime" value="{{old('username')}}">
                </div>
                <div class="form-group">
                    <label for="password">Lozinka</label>
                    <input type="password" class="form-control" name="password" id="Password" placeholder="******">
                </div>
                {{--<div class="form-group form-check">--}}
                {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-primary">Pristupi sistemu</button>
            </form>
        </div>
    </div>
@stop
