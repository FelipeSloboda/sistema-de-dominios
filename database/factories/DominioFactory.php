<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class DominioFactory extends Factory
{

    public function definition(): array
    {
        
        return [
            'nome' => fake()->firstName(),
            'user_id' => fake()->randomElement(User::pluck('id')),
        ];
    }
}
