<?php

namespace Database\Factories;

use App\Utils\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'id'       => Uuid::v4(),
            'name'     => fake()->name(),
            'email'    => fake()->safeEmail(),
            'password' => bcrypt('TodoApp.123'),
        ];
    }
}
