<?php
use Illuminate\Database\Seeder;

class TipoPedidosTableSeeder extends Seeder
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
        DB::table('tipopedidos')->insert($data);
    }
}
