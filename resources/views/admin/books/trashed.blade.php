@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">author</th>
                            <th scope="col">publication year</th>
                            <th scope="col">genre</th>
                            <th scope="col"><a class="btn btn-success" href="{{ route('admin.restore-all-books') }}">Restore all books</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($booksTrashed as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publication_year }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.books.show', $book->id) }}">show</a>
                                <a class="btn btn-warning" href="{{ route('admin.books.edit', $book->id) }}">edit</a>
                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline-block element-deleter">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <p>There are no books to be shown</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection