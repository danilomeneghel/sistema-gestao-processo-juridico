<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
        $date = Carbon::now();
        $createdDate = clone($date);
        $data = [
            [
                'nome'=>'João',
                'email'=>'joao@joao.com',
                'telefone'=>'51999999999',
                'genero'=>'Masculino',
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ],
            [
                'nome'=>'Ana',
                'email'=>'ana@ana.com',
                'telefone'=>'21888888888',
                'genero'=>'Feminino',
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ]
        ];
        Cliente::insert($data);
    }
}
