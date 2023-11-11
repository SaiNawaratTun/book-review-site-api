<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'rating' => fake()->numberBetween(0, 5),
                'user_id' => function() {
                    return User::all()->random();
                },
                'book_id' => function() {
                    return Book::all()->random();
            },
        ];
    }
}
