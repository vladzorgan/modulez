<?php

namespace App\Modules\AboutMe\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutMeDeleteRequest extends FormRequest
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
