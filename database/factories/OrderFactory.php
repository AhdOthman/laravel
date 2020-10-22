<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CustomerID' => Customer::all()->random()->id,
            "OrderDate" => $this->faker->dateTime(),
            "RequiredDate" => $this->faker->dateTime(),
            "ShippedDate" => $this->faker->dateTime(),
            "Status" => $this->faker->numberBetween(0, 2),
            "Comments" => "This is a product comment",
        ];
    }
}
