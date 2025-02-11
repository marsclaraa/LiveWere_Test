<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void //função 
    {
        $this->call([
            TarefaSeeder::class, //chama tudo oq tem dentro do array
        ]);

        $this->call([
            UsuarioSeeder::class, //chama tudo oq tem dentro do array
        ]);
    }
}
