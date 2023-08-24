<?php

namespace App\Modules\Portfolio\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioWorkUpdateRequest extends FormRequest
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
            'image_link' => ['string', 'max:255'],
        ];
    }
}
