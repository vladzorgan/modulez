<?php

namespace App\Modules\Skills\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillsDeleteRequest extends FormRequest
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
