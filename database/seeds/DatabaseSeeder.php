<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run()
    {
        $this->call(Clientes::class);
                
        $this->command->info('Tables seeded!');
    }
}