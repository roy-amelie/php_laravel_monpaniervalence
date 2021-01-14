@extends('layout')

@section('main')
<main>
    <div class="text-center">
        <h2>
            {{ $category -> name }}
        </h2>
        @foreach($category->shops as $shop)
        <p>{{ $shop->name }}</p>
        @endforeach
    </div>
</main>
@endsection


