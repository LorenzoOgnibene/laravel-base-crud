<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Validation Rules
     * Regole di validazione
     * 
     */
    protected $rules = 
    [
        'ISBN' => ['required'],
        'title' => ['required'],
        'description' => ['required'],
        'author' => ['required'], 
        'publication_year' => ['required'], 
        'cover_image' => ['required'], 
        'genre' => ['required'], 
        'genre' => ['publishing_house'], 
        'genre' => ['language']
     ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Mostra una risorsa (Book) specifica, passata tramite dependency Injection
     * 
     * @param  Book $book
     * @return view('admin.books.show')
     */
    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     * Mostra il form per modificare una specifica risorsa, passata tramite dependency Injection
     * 
     * @param  Book $book
     * @return view('admin.books.edit')
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     * Aggiorna i dati in una specifica risorsa, già inserita nel DB
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
