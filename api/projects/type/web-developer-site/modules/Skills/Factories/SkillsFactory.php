<?php

namespace App\Modules\Skills\Factories;

use App\Modules\Skills\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SkillsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Skill::class;

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
            'skill_percent' => rand(1, 100),
        ];
    }
}
