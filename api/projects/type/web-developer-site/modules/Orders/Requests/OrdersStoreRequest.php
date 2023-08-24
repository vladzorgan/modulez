<?php

namespace App\Modules\Orders\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersStoreRequest extends FormRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            'name' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'email' => ['string', 'max:255'],
            'comment' => ['string', 'max:255'],
        ];
    }
}
