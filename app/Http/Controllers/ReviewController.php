<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $review = Review::firstOrCreate(
            [
                'book_id' => $book->id,
            ],
            ['review' => $request->review,
            'user_id' => $request->user_id,
            ]
        );

        return new ReviewResource($review);
    }
}
