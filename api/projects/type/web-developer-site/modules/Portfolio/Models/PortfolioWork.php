<?php

namespace App\Modules\Portfolio\Models;

use App\Modules\ModuleHelper\Models\BaseModel;
use App\Modules\Portfolio\Factories\PortfolioWorkFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioWork extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_link',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return PortfolioWorkFactory::new();
    }
}
