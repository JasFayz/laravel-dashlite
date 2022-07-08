<?php

namespace Database\Factories\Admin;


use App\Models\Admin\PostCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $category = PostCategory::factory()->create();
        $user = User::factory()->create();
        return [
            'title' => [
                'ru' => "Ru " . $this->faker->title,
                'en' => "En " . $this->faker->title,
                'uz' => "Uz " . $this->faker->title,
            ],
            'content' => [
                'ru' => "Ru " . $this->faker->text,
                'en' => "En " . $this->faker->text,
                'uz' => "Uz " . $this->faker->text,
            ],
            'slug' => $this->faker->slug,
            'category_id' => $category->id,
            'published_at' => now(),
            "status" => $this->faker->boolean,
            "is_commentable" => $this->faker->boolean,
            "is_draft" => false,
            "drafter_owner_id" => $user->id
        ];
    }
}
