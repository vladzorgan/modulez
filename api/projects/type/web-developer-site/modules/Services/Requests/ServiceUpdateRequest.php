<?php

namespace App\Modules\Services\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'title' => ['string', 'max:255'],
            'slug' => ['string', 'max:255'],
            'description' => ['string', 'max:255'],
            'icon_link' => ['string', 'max:255'],
            'image_link' => ['string', 'max:255'],
        ];
    }
}
