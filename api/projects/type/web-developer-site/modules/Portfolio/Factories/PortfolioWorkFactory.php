<?php

namespace App\Modules\Portfolio\Factories;

use App\Modules\Portfolio\Models\PortfolioWork;
use App\Modules\Services\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PortfolioWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = PortfolioWork::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->jobTitle();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->text(75),
            'image_link' => 'https://api.lorem.space/image/game?w=400&h=400',
        ];
    }
}
