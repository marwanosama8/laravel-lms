<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Classes>
 */
final class ClassesFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Classes::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'teacher_id' => $this->faker->randomNumber(),
            'course_id' => $this->faker->randomNumber(),
            'week_day' => $this->faker->boolean,
            'start_at' => $this->faker->time(),
            'open_in' => $this->faker->dateTime(),
        ];
    }
}
