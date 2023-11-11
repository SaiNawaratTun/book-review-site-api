<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Resources\RatingResource;

class RatingController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $rating = Rating::firstOrCreate(
            [
                'book_id' => $book->id,
            ],
            ['rating' => $request->rating,
            'user_id' => $request->user_id,
            ]
        );

        return new RatingResource($rating);
    }
}
