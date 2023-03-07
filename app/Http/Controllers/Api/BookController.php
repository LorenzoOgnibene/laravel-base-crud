<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return response()->json([
            'success' => true,
            'results' => $books
        ]);
    }

    public function show(Book $book) {
        return response()->json([
            'success' => true,
            'results' => $book
        ]);
    }
}
