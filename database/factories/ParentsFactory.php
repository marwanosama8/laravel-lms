<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Parents;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Parents>
 */
final class ParentsFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = Parents::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->randomDigit,
            'phone' => $this->faker->phoneNumber,
            'country_id' => $this->faker->randomDigit(),
            'city_id' => $this->faker->randomDigit(),
            'email' => $this->faker->safeEmail,
            'member_at' => $this->faker->dateTime(),
        ];
    }
}
