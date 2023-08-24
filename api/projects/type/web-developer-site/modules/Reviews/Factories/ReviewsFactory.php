<?php

namespace App\Modules\Reviews\Factories;

use App\Modules\Reviews\Models\Review;
use App\Modules\Services\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fio' => fake()->firstName,
            'photo_link' => fake()->imageUrl(),
            'text' => fake()->text,
        ];
    }
}
