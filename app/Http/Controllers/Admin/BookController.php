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
        'ISBN' => ['required', 'string', 'min:13', 'max:13'],
        'title' => ['required', 'string', 'min:4', 'max:50'],
        'description' => ['required', 'string', 'min:5'],
        'author' => ['required', 'string', 'min:5', 'max:80'],
        'publication_year' => ['required', 'numeric','between:1540, 2023'],
        'cover_image' => ['required'],
        'genre' => ['required', 'string'],
        'publishing_house' => ['required', 'string', 'min:10', 'max:100'],
        'language' => ['required', 'min:2', 'max:3']
    ];

    protected $messages =
    [
        //ISBN rules Messages
        'ISBN.required' => 'E\' necessario inserire un ISBN',
        'ISBN.min' => 'E\' necessario che l\'ISBN abbia 13 caratteri',
        'ISBN.max' => 'E\' necessario che l\'ISBN abbia 13 caratteri',


        //title rules Messages
        'title.required' => 'E\' necessario inserire un titolo',
        'title.min' => 'E\' necessario che il titolo abbia almeno 4 caratteri',
        'title.max' => 'E\' necessario che il titolo  abbia al massimo 50 caratteri',

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
        $books = Book::paginate(14);
        //dd($books);
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {
        return view('admin.books.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();

        $data = $request->validate($this->rules, $this->messages);
        $newBook = new Book();
        $newBook->fill($data);
        $newBook->save();
        return redirect()->route('admin.books.index')->with('message');
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
     * Rimuove una specifica risorsa dal DB
     *
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin.books.index');
    }

    /**
     * forceDelete method for delete record permanenttly
     * Metodo forceDelete per eliminare definitivamente un record   
     */
    public function forceDelete(Book $book)
    {
        $book->forceDelete();

        return redirect()->route('admin.trashed-books')->with('message', "Il libro '$book->title' è stato eliminato definitivamente dall'archivio");
    }

    /**
     * trashed method for records deleted but not permanently
     * metodo trashed per recrd eliminati ma non definitivamente
     */
    public function trashed()
    {
        $booksTrashed = Book::onlyTrashed()->get();
        return view('admin.books.trashed', compact('booksTrashed'));
    }

    /**
     * restore method to recover trashed records
     * Metodo restore per recuperare record trashed
     */
    public function restore(Book $book)
    {
        $book->restore();
        return redirect()->route('admin.books.index')->with('message', "il progetto '$book->title' è stato ripristinato con successo");
    }

    /**
     * restoreAll method to recover all trashed records
     * Metodo restoreAll per recuperare Tutti i record trashed
     */
    public function restoreAll()
    {
        Book::withTrashed()->restore();
        return redirect()->route('admin.books.index')->with('message', 'Tutti i progetti sono stati ripristinati dal cestino');
    }
}
