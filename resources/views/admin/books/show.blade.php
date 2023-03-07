@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card mt-3">
                    <div class="row g-0">
                        <div class="card-header d-flex justify-content-between">
                            <a class="btn btn-outline-secondary" href="{{ route('admin.books.index') }}">back to book's list</a>
                            <p>
                                {{$book->type->name}}
                            </p>
                            <div class="modify-element-btns">
                                <a class="btn btn-warning me-2" href="{{ route('admin.books.edit', $book->id) }}">edit</a>
                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ $book->cover_image }}" class="img-fluid rounded-start" alt="{{ $book->title }} cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h3 class="card-title">{{ $book->title }}</h3>
                            <h5 class="card-text">{{ $book->author }}</h5>
                            <p class="card-text mt-2">{{ $book->description }}</p>

                            <h4>
                                Rivenditori:
                            </h4>
                            <ul>
                                @foreach ($book->resellers as $resellerName)
                                    <li>{{$resellerName->nome}} -- {{$resellerName->indirizzo}}</li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                        <div class="card-footer d-flex">
                            <ul class="m-auto">
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