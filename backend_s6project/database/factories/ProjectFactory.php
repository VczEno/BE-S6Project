<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'description' => fake()->text(50),
            'deadline' =>fake()->dateTimeBetween('now', '1 year'),
            'user_id' => User::get()->random()->id,
            'created_at' => fake()->datetime()
         ];
    }
}
