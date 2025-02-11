<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ano = rand(1990, 2005);
        $mes = rand(01, 02);
        $dia = rand(1, 30);
        $estado = collect(['SP', 'RJ', 'PR', 'GO', 'MG', 'BA']);
        $cidade = collect(['São Paulo','Rio de Janeiro','Brasília' ,'Fortaleza','Salvador','Belo Horizonte','Manaus','Curitiba', 'Presidente Epitácio', 'Sorocaba']);
        for($i=0; $i<=400; $i++)
        Usuario::create([
            'nome'=> 'Clara',
            'email'=> 'clara@gmail.com',
            'celular'=> 189986756,
            'estado_civil'=>'casada',
            'data_nascimento'=>$ano . '-'.  $mes . '-' . $dia,
            'cidade'=> $cidade->random(),
            'estado'=> $estado->random(),
            'endereco'=> 'Rua das Paineiras 18-45',
            'cep'=>'1950-089',
            'password'=> 'mc191007'

        ]);
    }
}
