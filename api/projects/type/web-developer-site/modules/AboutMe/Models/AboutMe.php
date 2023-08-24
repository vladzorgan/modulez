<?php

namespace App\Modules\AboutMe\Models;

use App\Modules\AboutMe\Factories\AboutMeFactory;
use App\Modules\ModuleHelper\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutMe extends BaseModel
{
    use HasFactory;

    protected $table = 'about_me';

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'address',
        'phone',
        'vk_link',
        'photo_link',
        'about_me_content',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return AboutMeFactory::new();
    }
}
