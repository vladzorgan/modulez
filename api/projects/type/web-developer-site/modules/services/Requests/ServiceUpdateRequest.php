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
            'title' => ['string', 'max:255']
        ];
    }
}
