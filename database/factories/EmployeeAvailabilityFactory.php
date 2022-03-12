<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee-availability>
 */
class EmployeeAvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "employee-name" =>$this->faker->name(),
            "title" =>$this->faker->jobTitle(),
            "office" =>$this->faker->buildingNumber(),
            "presence" =>$this->faker->boolean(),
            "reason" =>$this->faker->text(maxNbChars: 40),
            "departure-time"=>$this->faker->time(),
            "return-time"=>$this->faker->time(),        ];
    }
}
