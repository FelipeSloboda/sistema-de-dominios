<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        /*EXECUTA UMA SEED EM HARD CODE */
        User::create([
            'name' => 'admin istrador',
            'email' => 'admin@mail.com',
            'password' => bcrypt('1234567890'),
        ]);

        /*EXECUTA UMA FACTORY PARA GERAÇÃO EM MASSA*/
        User::factory()->count(3)->create();
    }
}
