<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
        $date = Carbon::now();
        $createdDate = clone($date);
        $data = [
            [
                'nome'=>'Horas Extras',
                'ativo'=>1,
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ],
            [
                'nome'=>'Dano Moral',
                'ativo'=>1,
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ],
            [
                'nome'=>'Dano Material',
                'ativo'=>1,
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ],
			[
                'nome'=>'Outros',
                'ativo'=>1,
                'created_at'=>$createdDate,
                'updated_at'=>$createdDate
            ]
        ];
        Tipopedido::insert($data);
    }
}
