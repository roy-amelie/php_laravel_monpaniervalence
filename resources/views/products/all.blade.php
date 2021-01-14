@extends('layout')
@section('main')
    <main>
        <div class="container-fluid">
            <div class="row">
                @foreach($products as $product)
                    <div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
                        <img src="{{url('/img/shop.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->address }}</p>
                            <p class="card-text">{{ $product->postal_code }}</p>
                            <p class="card-text">{{ $product->city }}</p>
                            <form method="post" action="{{ url('cart') }}">
                                @csrf
                                <input type="hidden" value="{{$product->id}}">
                                <input type="submit" value="Add To Cart">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

