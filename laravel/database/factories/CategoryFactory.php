<?php

namespace Database\Factories;

use App\Models\User;
use App\Utils\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'id'     => Uuid::v4(),
            'title'  => ucfirst(fake()->words(rand(1, 3), true)),
            'userId' => DB::table('users')->pluck('id')->random(),
        ];
    }
}
