<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Productline;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ProductlineID' => Productline::all()->random()->id,
            "Name" => $this->faker->name,
            "Scale" => $this->faker->numberBetween(1, 3),
            "Vendor" => $this->faker->company,
            "PdtDescription" => "This is a test description",
            "QtyInStock" => $this->faker->numberBetween(),
            "BuyPrice" => $this->faker->randomFloat(2),
            "MSRP" => null
        ];
    }
}
