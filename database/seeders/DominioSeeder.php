<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dominio;

class DominioSeeder extends Seeder
{
    public function run(): void
    {
        /*EXECUTA UMA SEED EM HARD CODE */
        Dominio::create([
            'nome' => 'felipesloboda.com.br',
            'user_id' => 1
        ]);

        /*EXECUTA UMA FACTORY PARA GERAÇÃO EM MASSA*/
        Dominio::factory()->count(10)->create();
    }
}
