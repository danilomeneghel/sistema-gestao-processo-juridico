<?php
use Illuminate\Database\Seeder;

class Clientes extends Seeder
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
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
            [
                'nome'=>'paulo',
                'email'=>'paulo@paulo.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
            [
                'nome'=>'ana',
                'email'=>'ana@ana.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'juliana',
                'email'=>'juli@ana.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'ana maria',
                'email'=>'ana@maria.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'ricardo',
                'email'=>'ricardo@ricardo.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'karina',
                'email'=>'karina@karina.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'diego',
                'email'=>'diego@diego.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'leticia',
                'email'=>'leticia@leticia.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
			[
                'nome'=>'carlos',
                'email'=>'carlos@carlos.com',
                'created_at'=>new Datetime,
                'updated_at'=>new Datetime
            ],
        ];
        DB::table('clientes')->insert($data);
    }
}