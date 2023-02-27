@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="text-center py-2 mb-2">Edit Book: "{{$book->title}}"</h1>

        @include('admin.books.partials.form', ['method' => 'PUT', 'routeName' => 'admin.books.update'])

    </div>
@endsection