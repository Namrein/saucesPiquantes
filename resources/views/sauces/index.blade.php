@extends('sauces.layout')

@section('content')

<div class="row">
    @foreach ($sauces as $sauce)

    <div class="col-md-4 mb-3">
        <a href="{{ route('afficherSauce', $sauce->id) }}" class="text-decoration-none">
            <div class="card" style="width: 18rem;">
                <img src="{{ $sauce->imageUrl }}" class="card-img-top img-fluid img-auto-width" alt="Pas d'image" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h1 class="text-center">{{ $sauce->name }}</h1>
                </div>
            </div>
        </a>
    </div>

    @endforeach
</div>

@endsection