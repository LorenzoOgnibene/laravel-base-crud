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
        'ISBN' => ['required', 'string' , 'min:13' , 'max:13'],
        'title' => ['required', 'string' , 'min:4' , 'max:50'],
        'description' => ['required', 'string', 'min:5' , 'max:80'],
        'author' => ['required', 'string', 'min:5' , 'max:80'], 
        'publication_year' => ['required', 'date'], 
        'cover_image' => ['required'], 
        'genre' => ['required', 'string'], 
        'publishing_house' => ['publishing_house', 'string', 'min:10' , 'max:100'], 
        'language' => ['language', 'min:2' , 'max:3']
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
        $books = Book::all();
        //dd($books);
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                'ISBN' => 'required|string|min:13|max:13',
                'title' => 'required|string|min:5|max:50',
                'description' => 'required|string',
                'author' => 'required|string|min:5|max:80',
                'publication_year' => 'required|date',
                'cover_image' => 'required|url',
                'genre' => 'required|string',
                'publishing_house' => 'required|string|min:10|max:100',
                'language' => 'required|min:2|max:3',
            ]
        );

        $newBook = new Book();
        $newBook->fill($data);
        $newBook->save();
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
}
