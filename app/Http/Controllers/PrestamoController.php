<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::with('book')->orderBy('devuelto', 'asc')->orderBy('created_at','desc')->paginate(4);

        $user = Prestamo::with('user')->get();
        
        return view('prestamos.index', ['prestamos'=>$prestamos, 'user'=>$user ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();

        return view('prestamos.new', ['title'=>'Crear Prestamo', 'books'=>$books, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_prestamo' => 'required',
            'fecha_devolucion' => 'required'
        ]);
        
        $prestamo = new Prestamo;

        $bookId = Book::select('id')->where('titulo', $request->titulo)->get();
        $userId = User::select('id')->where('name', $request->nombre)->get();

        $prestamo = new Prestamo;
        
        $prestamo->user_id=$userId[0]->id;
        $prestamo->book_id=$bookId[0]->id;
        $prestamo->fecha_prestamo=$request->fecha_prestamo;
        $prestamo->fecha_devolucion=$request->fecha_devolucion;
        $prestamo->devuelto=0;

        $book = Book::find($bookId[0]->id);
        
       $book->disponible=$book->disponible-1;
       $book->save();

        $prestamo->save();
        
        return to_route('prestamos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Prestamo $prestamo)
    {
        
        $book = Book::find($prestamo->book_id);

        if(@auth()->user()->id!==$prestamo->user_id){
            abort(403);
        }

        if ($prestamo->devuelto!=1) {
            $prestamo->devuelto=1;
            $book->disponible = $book->disponible+1;
        }

        $book->save();

        $prestamo->delete();

        return to_route('prestamos.index');
    }
}
