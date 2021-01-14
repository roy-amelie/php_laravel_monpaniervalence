@extends('layout')

@section('main')
<main>
    <h2>
        {{ $category -> name }}
    </h2>
    @foreach($category->shops as $shop)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $shop->name }}</h5>
            <p class="card-text">{{ $shop->address }}</p>
            <a href="{{ url('shops/' . $shop->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</main>
@endsection


