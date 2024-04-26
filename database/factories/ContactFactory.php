<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Code' => $this->faker->randomNumber(6),
            'Name' => $this->faker->name(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Phone' => $this->faker->phoneNumber(),
            'Mobile' => $this->faker->phoneNumber(),
            'Street' => $this->faker->streetAddress(),
            'City' => $this->faker->city(),
            'State' => $this->faker->state(),
            'Zip' => $this->faker->postcode(),
            'Country' => $this->faker->country(),
            'VAT' => $this->faker->randomNumber(6),
            // Tambahkan definisi untuk kolom lainnya sesuai kebutuhan
        ];
    }
}