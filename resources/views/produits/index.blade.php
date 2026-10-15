@extends('layouts.app')
@section('title','Liste des produits')
@section('content')
    <h1>Liste des produits</h1>
    <a href="{{ route('produits.create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
                <tr>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->prix }} €</td>
                    <td><img src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" width="100"></td>
                    <td>
                        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>