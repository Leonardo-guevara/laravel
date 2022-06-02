<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
        // 'id' =>$this->table->integer('user_id');
            'tittle' => $this->faker->jobTitle,
            'content' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl($width = 640, $height = 480),
            'user_id' => User::factory(),

            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),

            
            // 'title' => $this->faker->title(),

        ];
    }
}
