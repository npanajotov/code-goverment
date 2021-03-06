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
                        <h1 class="display-4">eUprava</h1>
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
                <div class="news">
                    <div class="title">
                        Obavestenja
                    </div>
                    <div class="news-list">
                        @foreach($noty as $item)
                            <div class="card">
                                <div class="card-body p-3">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                    <p class="card-text">{{$item->message}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
