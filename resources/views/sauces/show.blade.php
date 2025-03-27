@extends('sauces.layout')

@section('content')

    <div class="card" style="width: 18rem;">
        <img src="{{ $sauce->imageUrl }}" class="card-img-top" alt="Pas d'image">
        <div class="card-body text-center">
            <h1>{{ $sauce->name }}</h1>
            <div class="text-primary">
                <p>Description : {{ $sauce->description }}</p>
                <p>Piment principal : {{ $sauce->mainPepper }}</p>
                <p>Fabricant : {{ $sauce->manufacturer }}</p>
                <h4 class="card-text text-danger">Piquant : {{ $sauce->heat }}/10</h4>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a class="btn btn-warning me-3" type="button" href="{{ route('modifierSauce', $sauce->id) }}">Modifier</a>
            <form action="{{ route('supprimerSauce', $sauce->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
    </div>

@endsection