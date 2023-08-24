<?php

namespace App\Modules\Reviews\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsDeleteRequest extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'id' => ['numeric']
        ];
    }
}
