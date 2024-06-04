<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'gender' => $this->faker->randomElement([‘男性’, ‘女性’]),
            'email' => $this->faker->email,
            'tel' => $this->faker->randomnumber,
            'address' => $this->faker->address,
            'building' => $this->faker->text,
            'content' => $this->faker->text,

        ];
    }
}
