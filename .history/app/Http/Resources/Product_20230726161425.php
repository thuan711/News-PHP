<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'tenSP' => $this->tenSp,
            'gia' => $this->gia,
            'anhien' => $this->anhien,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
