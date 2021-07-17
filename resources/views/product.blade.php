@extends('layouts.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $p)
                <div class="carousel-item {{ $p['id'] == 1 ? 'active' : '' }}">
                    <a href="detail/{{ $p['id'] }}">
                        <img class="d-block w-100" src="{{ $p['gallery'] }}" style="height: 630px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $p->name }}</h5>
                            <p>{{ $p->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--trending product -->
    <h3 class="text-center pt-3 pb-4">Trending Products</h3>
    <div class="container">
        <div class="row">
            @foreach ($products as $p)
                <div class="col-sm-4">
                    <a href="{{ url('detail/'. $p['id'] )}}">
                        <img class="d-block " src="{{ $p->gallery }}" style="height: 200px; padding-bottom:40px">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
