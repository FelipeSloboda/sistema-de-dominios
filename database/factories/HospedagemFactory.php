<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Dominio;

class HospedagemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'hospedeiro' => fake()->randomElement(['localweb','hostinger','hostgator']),
            'vencimento' => fake()->date('Y-m-d'),
            'dominio_id' => fake()->randomElement(Dominio::pluck('id'))
        ];
    }
}
