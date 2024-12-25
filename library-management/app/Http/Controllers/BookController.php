<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $book = Book::create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return view('books.show', compact('book'));
    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:255',
            'year' => 'sometimes|required|integer',
            'quantity' => 'sometimes|required|integer',
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }


    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return redirect()->route('books.index')->with('success', 'Book not found.');
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
