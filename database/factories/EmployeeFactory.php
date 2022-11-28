<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'gender' => fake()->randomElement(['MALE', 'FEMALE']),
            'age' => fake()->numberBetween('18', '45'),
            'phone' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl(),
            'team_id' => Team::inRandomOrder()->first()->id,
            'role_id' => Role::inRandomOrder()->first()->id,
        ];
    }
}
