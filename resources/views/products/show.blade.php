@extends('layout')

@section('main')
    <main>

        <div class="container-fluid">
            <div class="row">

                <img src="{{url('/img/shop.jpeg')}}" class="col-6" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">{{ $product->weight }}</p>
                    <p class="card-text">{{ $product->quantity }} en stock</p>
                    <br>
                    <br>
                    <p class="card-text">{{ $product->price }}{{ $product->price ?  ' euros' : '' }} </p>
                    <br>
                    <br>
                    <form action="{{ route('cart.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name"  value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <label for="quantity">Quantité :</label>
                        <br>
                        <input type="number" name="quantity" id="quantity" value="1">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
