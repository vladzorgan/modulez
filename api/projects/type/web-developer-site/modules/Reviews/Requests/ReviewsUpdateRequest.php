<?php

namespace App\Modules\Reviews\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsUpdateRequest extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'fio' => ['string', 'max:255'],
            'photo_link' => ['string', 'max:255'],
            'text' => ['string', 'max:255'],
        ];
    }
}
