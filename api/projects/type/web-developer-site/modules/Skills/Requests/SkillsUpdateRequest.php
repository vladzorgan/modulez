<?php

namespace App\Modules\Skills\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillsUpdateRequest extends FormRequest
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
            'skill_percent' => ['numeric', 'max:255'],
        ];
    }
}
