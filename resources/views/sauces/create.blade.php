@extends('sauces.layout')

@section('content')
    <h1>Créer une nouvelle sauce</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('storeSauce') }}" method="POST">

        <div class="form-group">
            <label for="name">Nom de la sauce</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="manufacturer">Fabricant</label>
            <input type="text" name="manufacturer" id="manufacturer" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="mainPepper">Piment principal</label>
            <input type="text" name="mainPepper" id="mainPepper" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="imageUrl">URL de l'image</label>
            <input type="url" name="imageUrl" id="imageUrl" class="form-control">
        </div>

        <div class="form-group">
            <label for="heat">Chaleur (1 à 10)</label>
            <input type="number" name="heat" id="heat" class="form-control" min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer la sauce</button>
    </form>
@endsection
