<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id'=> $this->id,
          'title' => $this->title,
          'image' => asset($this->image),
          'description' => $this->description,
          'published_at'=> $this->created_at->format('Y, M d'),
        ];
    }
}
