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
                </div>
            </div>
        </div>

         <div class="container-fluid">
            <div class="row">
                @foreach($shop->products as $product)
                    <div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
                        <img src="{{url('/img/shop.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->address }}</p>
                            <p class="card-text">{{ $product->postal_code }}</p>
                            <p class="card-text">{{ $product->city }}</p>
                            <a href="{{ url('products/' . $product->id)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
