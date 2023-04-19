<?php
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
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
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
            [
                'nome'=>'Paulo',
                'email'=>'paulo@paulo.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
            [
                'nome'=>'Ana',
                'email'=>'ana@ana.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ]
        ];
        DB::table('clientes')->insert($data);
    }
}
