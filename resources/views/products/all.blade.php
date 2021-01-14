@extends('layout')
@section('main')
    <main>
        <div class="container-fluid">

           <!-- @if (session('success'))
            <div>{{ session('success')}}</div>
            @endif-->

            <div class="row">
                @foreach($products as $product)
                    <div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
                        <img src="{{url('/img/shop.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ $product->price }}</p>
                            <form method="post" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="hidden" name="name"  value="{{$product->name}}">
                                <input type="hidden" name="price" value="{{$product->price}}">
                                <input type="submit" value="Ajouter au panier">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

