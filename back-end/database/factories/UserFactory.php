<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name,
            // 'age' => now(),
            // 'address' => 'foi',
            // 'cpf' => strval($this->faker->numberBetween(0, 12345678911)),
            // 'cnpj' => strval($this->faker->numberBetween(0, 12345678911)),
            // 'rg' => strval($this->faker->numberBetween(0, 12345678911)),
            // 'doc_type' => 'cpf'
        ];
    }
}
