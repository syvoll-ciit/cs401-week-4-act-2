<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['D', 'P', 'I']);
        $title = fake()->title();
        
        return [
            "title" => $title,
            "content" => fake()->paragraph(),
            "slug" => Str::slug($title),
            "publication_date" => $status == 'p' ? now() :null,
            "status" => $status,
            "featured_image_url" => fake()->imageUrl(640, 480, 'animals',true),
        ];
    }
}
