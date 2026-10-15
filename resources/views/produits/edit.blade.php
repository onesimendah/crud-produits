@extends('layouts.app')

@section('title', 'Modifier un produit')
@section('content')
    <h1>Modifier un produit</h1>
    <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $produit->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" step="0.01" value="{{ $produit->prix }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <img src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" width="100" class="d-block mb-2">
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection