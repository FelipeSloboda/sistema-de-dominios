<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospedagem;

class HospedagemSeeder extends Seeder
{

    public function run(): void
    {
        /*EXECUTA UMA SEED EM HARD CODE */
        Hospedagem::create([
            'hospedeiro' => 'hostinger',
            'vencimento' => '2026-01-31',
            'dominio_id' => 1
        ]);

        /*EXECUTA UMA FACTORY PARA GERAÇÃO EM MASSA*/
        Hospedagem::factory()->count(10)->create();
    }
}
