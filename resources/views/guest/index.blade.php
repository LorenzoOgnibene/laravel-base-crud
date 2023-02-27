@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-4 d-flex flex-wrap gy-5">
            <div class="card">
                <img src="{{$book->cover_image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h3 class="card-title">{{$book->title}}</h3>
                  <h6 class="card-subtitle mb-2 text-muted">{{$book->language}}</h6>
                  <h5 class="card-title">{{$book->author}}</h5>
                  <a href="{{route('books.show', $book->id)}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $books->links() }}
</div>
@endsection
