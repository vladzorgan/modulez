<?php

namespace App\Modules\Orders\Models;

use App\Modules\ModuleHelper\Models\BaseModel;
use App\Modules\Orders\Factories\OrdersFactory;
use App\Modules\Portfolio\Factories\PortfolioWorkFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'comment',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return OrdersFactory::new();
    }
}
