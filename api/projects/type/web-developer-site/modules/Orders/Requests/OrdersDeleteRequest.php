<?php

namespace App\Modules\Orders\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersDeleteRequest extends FormRequest
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
