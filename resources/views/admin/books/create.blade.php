@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="py-3 slide-right-title">
            Create new Book:
        </h1>

        @include('admin.books.partials.form', [ 'method' => 'POST', 'routeName' => 'admin.books.store'])

    </div>
@endsection