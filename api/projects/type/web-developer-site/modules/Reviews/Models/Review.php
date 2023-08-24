<?php

namespace App\Modules\Reviews\Models;

use App\Modules\ModuleHelper\Models\BaseModel;
use App\Modules\Reviews\Factories\ReviewsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends BaseModel
{

    use HasFactory;

    protected $fillable = [
        'fio',
        'photo_link',
        'text',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return ReviewsFactory::new();
    }
}
