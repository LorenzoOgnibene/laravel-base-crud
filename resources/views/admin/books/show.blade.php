@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
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
            </div>
        </div>
    </div>
@endsection