@extends('layout')

@section('main')
    <main>

        <h2>Création d'un produit</h2>
        <br>
        <form method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="Saisissez le nom de votre produit">
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Saisissez une description produit">
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" placeholder="Fixez le prix de votre produit">
            </div>
            <div class="form-group">
                <label for="weight">Poids</label>
                <input type="number" class="form-control" id="weight" placeholder="Indiquez le poids de votre produit">
            </div>
            <div class="form-group">
                <label for="quantity">Quantité</label>
                <input type="number" class="form-control" id="quantity" placeholder="Indiquez la quantité disponible de votre produit">
            </div>
            <br>

            <button type="submit" id="submit-product" class="btn btn-primary">Créer le produit</button>
        </form>
    </main>

    <style>
        #submit-product {
            background-color: #ff9d00 !important;
            border-color: #ff9d00 !important;
        }

    </style>
@endsection
