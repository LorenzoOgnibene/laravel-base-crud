@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3 h-100">
    <div class="container py-5">
        @guest
        <h1 class="fw-bold slide-right-title">
            Welcome in Laravel Library
        </h1>

        <p class="col-md-8 fs-4 slide-right-subtitle">Log in to access the editing and creation of books within the program, otherwise click on the button below to have a general view of the books that are in our library</p>
        <a href="#" class="btn btn-dark slide-right-btn">Go to Books</a> {{--  {{route('guests.books.index')}} --}}
        @else
        <h1 class="display-5 fw-bold">
            Admin Library
        </h1>

        <p class="col-md-8 fs-4">Back Office for managing the list of books in the list, creating and editing them. Click on the button below to access the list of books in our database</p>
        <a href="#" class="btn btn-dark">Go to Books</a> {{-- {{route('admin.books.index')}} --}}
        @endguest
    </div>
</div>
@endsection