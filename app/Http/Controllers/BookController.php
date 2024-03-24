<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('id','desc')->paginate(4);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create',['title'=>'Creating a new book']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100',
            'autor' => 'required|min:3',
            'genero' => 'required',
            'disponible' => 'required|numeric',
            'anno_publicacion' => 'required|date'
        ]);
    
        $book = new Book;
        
        $book->titulo=$request->titulo;
        $book->autor=$request->autor;
        $book->anno_publicacion=$request->anno_publicacion;
        $book->genero=$request->genero;
        $book->disponible=$request->disponible;

        $book->save();
        
        return redirect()->route('books.index',['mensaje'=>'Libro almacenado exitosamente!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {

        return view('books.edit',['title'=>'Editing a new book', 'book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:100',
            'autor' => 'required|min:3',
            'genero' => 'required|min:3|max:50',
            'disponible' => 'required|numeric',
            'anno_publicacion' => 'required|date'
        ]);

        $book = Book::find($book->id);

        $book->titulo = $request->titulo;
        $book->autor = $request->autor;
        $book->anno_publicacion = $request->anno_publicacion;
        $book->genero = $request->genero;
        $book->disponible = $request->disponible;

        $book->save();

        return to_route('books.index',['mensaje'=>'Libro actualizado exitosamente!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book = Book::find($book->id);
        $book->delete();
        
        return to_route('books.index',['mensaje'=>'Libro se ha eliminado exitosamente!']);
    }
}
