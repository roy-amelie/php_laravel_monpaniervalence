@extends('layout')
@section('main')
<main xmlns="http://www.w3.org/1999/html">
    <div class="container-fluid">

        <!-- @if (session('success'))
         <div>{{ session('success')}}</div>
         @endif-->
        <form method="post" action="{{route('order.store')}}">
              @csrf
        <div class="row">

            @foreach($products as $product)
            <div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
                <img src="{{url('/img/shop.jpeg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Commerçant: {{ $product->shop }} €</p>
                    <p class="card-text">Prix: {{ $product->price }} €</p>
                    <p class="card-text">Quantitée: {{ $product->qty }}</p>
                    <p class="card-text">Prix total: {{ $product->qty * $product->price }} €</p>
                </div>
            </div>
            @endforeach
        </div>
        <button>Commander</button>
        </form>
    </div>
</main>
@endsection

