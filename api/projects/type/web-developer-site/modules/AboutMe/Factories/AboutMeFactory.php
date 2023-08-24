<?php

namespace App\Modules\AboutMe\Factories;

use App\Modules\AboutMe\Models\AboutMe;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutMeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = AboutMe::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => fake()->lastName,
            'first_name' => fake()->name,
            'middle_name' => fake()->lastName,
            'address' => fake()->address,
            'phone' => fake()->phoneNumber,
            'vk_link' => fake()->url,
            'photo_link' => fake()->imageUrl,
            'about_me_content' => fake()->text,
        ];
    }
}
