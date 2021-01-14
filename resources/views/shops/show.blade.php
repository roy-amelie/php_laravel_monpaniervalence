@extends('layout')

@section('main')
    <main>
        <h2> Shop {{ $shop->name }}</h2>
        <div class="container-fluid">
            <div class="row">

                <img src="{{url('/img/shop.jpeg')}}" class="col-6" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $shop->name }}</h5>
                    <p class="card-text">{{ $shop->address }}</p>
                    <p class="card-text">{{ $shop->postal_code }}</p>
                    <p class="card-text">{{ $shop->city }}</p>
                    <a href="{{ url('shops/' . $shop->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </main>
@endsection
