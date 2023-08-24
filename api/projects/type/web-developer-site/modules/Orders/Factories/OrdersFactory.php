<?php

namespace App\Modules\Orders\Factories;

use App\Modules\Orders\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'comment' => fake()->text(20),
        ];
    }
}
