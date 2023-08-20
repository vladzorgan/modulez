<?php

namespace App\Modules\Services\Factories;

use App\Modules\Services\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Service::class;

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
            'icon_link' => 'https://api.lorem.space/image/game?w=50&h=50',
            'image_link' => 'https://api.lorem.space/image/game?w=400&h=400',
        ];
    }
}
