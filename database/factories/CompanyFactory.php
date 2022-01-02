<?php

namespace Database\Factories;

use App\Models\Admin\CRM\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company(),
            'about' => $this->faker->paragraph(3, true),
            'slug'=>  preg_replace('/[^A-Za-z0-9-]+/', '-', $this->faker->word(3, true)  ),
            'is_customer' => false,
            'last_contact' => $this->faker->dateTime($max = 'now', $timezone = null), 
            'street_address'=> $this->faker->streetName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip_code' => $this->faker->postcode(),
            'email_address' => $this->faker->safeEmail(),
            'url' => $this->faker->url(),
            'phone'=> $this->faker->tollFreePhoneNumber(),
            'fax' => $this->faker->tollFreePhoneNumber(),
            'bill_to_address' => $this->faker->address()
        ];
    }
}
