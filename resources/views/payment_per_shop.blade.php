@extends('layout')
@section('main')

@foreach($total_per_shop as $shop => $price)
<div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
    <img src="{{url('/img/shop.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"> Commerçant: {{ $shop }}</h5>
        <p class="card-text">Prix: {{ $price }} €</p>
    </div>
</div>
@endforeach

@endsection
