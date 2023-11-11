<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Rating;
use App\Models\Review;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->count(50)->create()->each(
            function ($book) {
            $book->reviews()->createMany(Review::factory()->count(5)->make()->toArray());
            $book->ratings()->createMany(Rating::factory()->count(5)->make()->toArray());
            }
    
    );
    }
}
