<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Student>
 */
final class StudentFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Student::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'age' => $this->faker->randomNumber(),
            'email' => $this->faker->safeEmail,
            'grade_id' => $this->faker->word,
            'parent_id' => $this->faker->randomNumber(),
            'code' => $this->faker->numberBetween(1000,9999),
            'admin_id' => $this->faker->randomDigit(),
            'member_at' => $this->faker->dateTime(),
            'country_id' => $this->faker->randomDigit(),
            'city_id' => $this->faker->randomDigit(),
            'school_name' => $this->faker->name,
        ];
    }
}
