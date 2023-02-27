@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 pt-5 text-center">
            Create new Book:
        </h1>

        @include('admin.books.partials.form', [ 'method' => 'POST', 'routeName' => 'admin.books.store'])

    </div>
@endsection