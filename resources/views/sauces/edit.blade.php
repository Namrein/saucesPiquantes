@extends('sauces.layout')

@section('content')
<div class="container">
    <h2>Modifier la Sauce Piquante</h2>
    <form action="{{ route('updateSauce', $sauce->id) }}" method="POST" enctype="multipart/form-data">

        @method('GET')
        <div class="form-group">
            <label for="name">Nom de la Sauce</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $sauce->name) }}" required>
        </div>

        <div class="form-group">
            <label for="manufacturer">Nom du Fabricant</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ old('manufacturer', $sauce->manufacturer) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $sauce->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="mainPepper">Piment Principal</label>
            <input type="text" class="form-control" id="mainPepper" name="mainPepper" value="{{ old('mainPepper', $sauce->mainPepper) }}" required>
        </div>

        <div class="form-group">
            <label for="imageUrl">URL de l'image</label>
            <input type="text" class="form-control" id="imageUrl" name="imageUrl" value="{{ old('imageUrl', $sauce->imageUrl) }}" required>
        </div>

        <div class="form-group">
            <label for="heat">Niveau de Piquant (1-10)</label>
            <input type="number" class="form-control" id="heat" name="heat" value="{{ old('heat', $sauce->heat) }}" min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary">Sauvegarder les Modifications</button>
    </form>
</div>
@endsection
