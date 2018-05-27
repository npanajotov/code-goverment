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
                        <h1 class="display-4">PRETRAGA DOKUMENATA</h1>
                        <p class="lead">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" style="padding:30px 0">
            <div class="row">
                <div class="col-md-12">
                    <h5>Rezultati za traženi pojam: {{Request::query('q')}}</h5>
                    <ul class="list-group">

                        @foreach($items as $item)
                            <li class="list-group-item"><a style="display: block"
                                                           href="/files/{{$item['_source']['title']}}"
                                                           target="_blank">{{$item['_source']['title']}}
                                    <span class="pull-right">
                                        <i class="fa fa-download"></i></span>
                                </a>

                            </li>

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

@stop
