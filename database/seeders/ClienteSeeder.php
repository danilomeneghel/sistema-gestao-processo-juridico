<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nome'=>'João',
                'email'=>'joao@joao.com',
                'telefone'=>'51999999999',
                'genero'=>'Masculino'
            ],
            [
                'nome'=>'Ana',
                'email'=>'ana@ana.com',
                'telefone'=>'21888888888',
                'genero'=>'Feminino'
            ]
        ];
        Cliente::insert($data);
    }
}
