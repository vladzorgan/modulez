<?php

namespace App\Modules\Services\Models;

use App\Modules\ModuleHelper\Models\BaseModel;
use App\Modules\Services\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends BaseModel
{

    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon_link',
        'image_link',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return ServiceFactory::new();
    }
}
