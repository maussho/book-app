<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Editorial;
use App\Models\Gender;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $genders = Gender::all();
        $editorials = Editorial::all();
        return view('books.create', ['genders' => $genders, 'editorials' => $editorials]);
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
        $books = new Book();
        $books->title = $request->title;
        $books->subtitle = $request->subtitle;
        $books->numberPage = $request->numberPage;
        $books->language = $request->language;
        $books->description = $request->description;
        $books->status = $request->status;
        $books->price = $request->price;
        $books->gender_id = $request->gender_id;
        $books->editorial_id = $request->editorial_id;
        $books->save();
        return redirect()->action([BookController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $genders = Gender::all();
        $editorials = Editorial::all();
        $book = Book::find($id);
        return view('books.edit',['book' => $book, 'genders' => $genders, 'editorials' => $editorials]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $book->title = $request->title;
        $book->subtitle = $request->subtitle;
        $book->numberPage = $request->numberPage;
        $book->language = $request->language;
        $book->description = $request->description;
        $book->status = $request->status;
        $book->price = $request->price;
        $book->gender_id = $request->gender_id;
        $book->editorial_id = $request->editorial_id;
        $book->save();
        return redirect()->action([BookController::class, 'index']);


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
