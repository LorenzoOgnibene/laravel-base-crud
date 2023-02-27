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

    protected $messages = 
    [
        //ISBN rules Messages
        'ISBN.required' => 'E\' necessario inserire un ISBN',

        //title rules Messages
        'title.required' => 'E\' necessario inserire un titolo',

        //description rules Messages
        'description.required' => 'E\' necessario inserire una descrizione',

        //author rules Messages
        'author.required' => 'E\' necessario inserire l\'autore',

        //publication_year rules Messages
        'author.required' => 'E\' necessario inserire l\'anno di pubblicazione',

        //cover_image rules Messages
        'cover_image.required' => 'E\' necessario inserire l\'immagine del libro',

        //cover_image rules Messages
        'genre.required' => 'E\' necessario inserire il genere del libro',

        //publishing_house rules Messages
        'publishing_house.required' => 'E\' necessario inserire la casa editrice',

        //language rules Messages
        'language.required' => 'E\' necessario inserire la lingua del libro',
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
        $dataValidate = $request->validate($this->rules, $this->messages);
        $book->update($dataValidate);
        
        return redirect()->route('admin.books.show', $book->id);
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
