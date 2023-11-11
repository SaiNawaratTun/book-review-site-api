<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'review' => $this->review,
            'user_id' => $this->user_id,
            'book_id' => $this->book_id,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'book' => $this->book,
        ];
    }
}
