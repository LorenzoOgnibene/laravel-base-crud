@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        {{-- <div class="col-10">
            <div class="card mt-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $book->cover_image }}" class="img-fluid rounded-start" alt="{{ $book->title }} cover">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title">{{ $book->title }}</h3>
                        <h5 class="card-text">{{ $book->author }}</h5>
                        <p class="card-text mt-2">{{ $book->description }}</p>
                        <p class="card-text">genre: {{ $book->genre }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul>
                            <li class="d-inline-block me-3">Genre: {{ $book->genre }}</li>
                            <li class="d-inline-block me-3">Language: {{ $book->language }}</li>
                            <li class="d-inline-block me-3">Publishing house: {{ $book->publishing_house }}</li>
                            <li class="d-inline-block me-3">ISBN: {{ $book->ISBN }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-5">
            <img src="{{$book->cover_image}}" alt="" class="img-fluid">
        </div>
        <div class="col-7">
            <h3>{{$book->title}}</h3>
            <p>Di: <strong>{{$book->author}}</strong> <span class="text-secondary">(autore)</span> | <strong>{{$book->publishing_house}}:</strong> {{$book->publication_year}}</p>
            <div class="rating mt-2">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <div>
                <h2 class="fw-bold mt-3">20,99 &euro;</h2>
            </div>
        </div>
    </div>
    <div class="navs">
        <a href="#description">Descrizione</a>
        <a href="#details">Dettagli</a>
    </div>
    <div class="row">
        <div class="col-12">
            <h4 class="fw-bold" id="description">Descrizione</h4>
            <p>{{$book->description}}</p>
        </div>
    </div>
    <div class="line"></div>
    <div class="row">
        <div class="col-12">
            <h4 class="fw-bold" id="details">Dettagli</h4>
            <h4><strong>Autore:</strong> {{$book->author}}</h4>
            <h4><strong>Editore:</strong> {{$book->publishing_house}}</h4>
            <h4><strong>Anno:</strong> {{$book->publication_year}}</h4>
            <h4><strong>ISBN:</strong> {{$book->ISBN}}</h4>
        </div>
    </div>
</div>
@endsection