<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title, '-') . '-' . mt_rand();
        $body = $this->faker->paragraph(50);
        $excerpt = Str::substr($body, 0, 50);
        return [
            //
            'category_id' => $this->faker->numberBetween(1, 4),
            'author_id' => $this->faker->numberBetween(1, 5),
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
            'excerpt' => $excerpt
        ];
    }
}
