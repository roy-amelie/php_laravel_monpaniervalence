@extends('layout')

@section('main')
    <main>
        <h2>
            {{ $category -> name }}
        </h2>
        <div class="container-fluid">
            <div class="row">
                @foreach($category->shops as $shop)
                    <div class="card col-sm-6 col-md-4 col-lg-3 category text-center" style="width: 18rem;">
                        <img src="{{url('/img/logo.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $shop->name }}</h5>
                            <p class="card-text">{{ $shop->address }}</p>
                            <p class="card-text">{{ $shop->postal_code }}</p>
                            <p class="card-text">{{ $shop->city }}</p>
                            <a href="{{ url('shops/' . $shop->id)}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection


