@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img src="/{{ $product->gallery }}" height="400" alt="">

            </div>
            <div class="col-sm-6 pt-5 pl-5 text-center">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <h2>Price : {{ $product->price }}</h2>
                <button type="button" class="btn btn-primary ">Add to cart</button>
                <button type="button" class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
