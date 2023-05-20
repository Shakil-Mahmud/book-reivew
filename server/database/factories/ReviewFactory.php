<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'writer_name' => $this->faker->name,
            'article' => $this->faker->paragraphs(rand(2, 5), true), // Generates multiple sections separated by new lines
            'image' => $this->faker->imageUrl(),
            'likes' => 0,
        ];
    }
}
