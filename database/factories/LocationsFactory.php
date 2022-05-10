<?php

namespace Database\Factories;

use App\Models\Inventory\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationsFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location_name' => $this->faker->word
        ];
    }
}
