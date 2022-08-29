<?php

namespace Database\Factories;

use App\Utils\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition()
    {
        $category = DB::table('categories')
            ->where(
                'id',
                DB::table('categories')->pluck('id')->random()
            )
            ->first();

        return [
            'id'         => Uuid::v4(),
            'title'      => ucfirst(fake()->words(rand(1, 10), true)),
            'userId'     => $category->userId,
            'categoryId' => $category->id,
        ];
    }
}
