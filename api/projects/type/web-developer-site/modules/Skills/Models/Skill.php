<?php

namespace App\Modules\Skills\Models;

use App\Modules\ModuleHelper\Models\BaseModel;
use App\Modules\Portfolio\Factories\PortfolioWorkFactory;
use App\Modules\Skills\Factories\SkillsFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'skill_percent',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return SkillsFactory::new();
    }
}
