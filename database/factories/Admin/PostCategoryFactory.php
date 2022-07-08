<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\PostCategory>
 */
class PostCategoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => [
                'ru' => 'Ru ' . $this->faker->title,
                'en' => 'En ' . $this->faker->title,
                'uz' => 'Uz ' . $this->faker->title,
            ],
            'slug' => Str::slug($this->faker->slug),
            'parent_id' => 0,
            'desc' => [
                'ru' => 'Ru ' . $this->faker->text,
                'en' => 'En ' . $this->faker->text,
                'uz' => 'Uz ' . $this->faker->text,
            ],
        ];
    }
}
