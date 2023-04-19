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
                'nome'=>'joao',
                'email'=>'joao@joao.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
            [
                'nome'=>'paulo',
                'email'=>'paulo@paulo.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
            [
                'nome'=>'ana',
                'email'=>'ana@ana.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'juliana',
                'email'=>'juli@ana.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'ana maria',
                'email'=>'ana@maria.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'ricardo',
                'email'=>'ricardo@ricardo.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'karina',
                'email'=>'karina@karina.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'diego',
                'email'=>'diego@diego.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'leticia',
                'email'=>'leticia@leticia.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
			[
                'nome'=>'carlos',
                'email'=>'carlos@carlos.com',
                'data_criacao'=>new Datetime,
                'data_edicao'=>new Datetime
            ],
        ];
        DB::table('clientes')->insert($data);
    }
}
