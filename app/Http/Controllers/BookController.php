<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\BookResource;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        return BookResource::collection(Book::with('ratings','reviews')->paginate(25));
    }

    public function store(Request $request)
    {
        $book = Book::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
        ]);

        return new BookResource($book);
    }

    public function show(Book $book)
    {
        return new BookResource($book);
    }

    public function update(Request $request, Book $book)
    {

        $book->update($request->only(['title', 'description']));

        return new BookResource($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
