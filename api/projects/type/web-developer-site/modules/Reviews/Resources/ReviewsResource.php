<?php

namespace App\Modules\Reviews\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'fio' => $this->fio,
            'photo_link' => $this->photo_link,
            'text' => $this->text,
        ];
    }
}
