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
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $books->links() }}
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
<script>
    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        rewind: true,
    });

    splide.mount();
</script>