<?php

namespace App\Modules\AboutMe\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutMeUpdateRequest extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'last_name' => ['string', 'max:255'],
            'first_name' => ['string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'vk_link' => ['string', 'max:255'],
            'photo_link' => ['string', 'max:255'],
            'about_me_content' => ['string', 'max:255'],
        ];
    }
}
