<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipopedido;

class TipopedidoSeeder extends Seeder
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
                'nome'=>'Horas Extras',
                'ativo'=>1
            ],
            [
                'nome'=>'Dano Moral',
                'ativo'=>1
            ],
            [
                'nome'=>'Dano Material',
                'ativo'=>1
            ],
			[
                'nome'=>'Outros',
                'ativo'=>1
            ]
        ];
        Tipopedido::insert($data);
    }
}
