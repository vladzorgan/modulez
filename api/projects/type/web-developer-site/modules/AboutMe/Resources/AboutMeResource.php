<?php

namespace App\Modules\AboutMe\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutMeResource extends JsonResource
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
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'address' => $this->address,
            'phone' => $this->phone,
            'vk_link' => $this->vk_link,
            'photo_link' => $this->photo_link,
            'about_me_content' => $this->about_me_content,
        ];
    }
}
