<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OfficeCode' => Office::all()->random()->Code,
            'ReportsTo' => null,
            'LastName' => $this->faker->lastName,
            'FirstName' => $this->faker->firstName,
            'Extension' => $this->faker->word,
            'Email' => $this->faker->email,
            'JobTitle' => $this->faker->jobTitle,
        ];
    }
}
