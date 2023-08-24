<?php

namespace App\Modules\Portfolio\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioWorkDeleteRequest extends FormRequest
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
