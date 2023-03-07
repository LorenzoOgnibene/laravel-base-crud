@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="py-3 slide-right-title">Edit Book: "{{$book->title}}"</h1>

        @include('admin.books.partials.form', ['method' => 'PUT', 'routeName' => 'admin.books.update'])

    </div>
@endsection