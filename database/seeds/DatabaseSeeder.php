<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run()
    {
        $this->call(ClientesTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->command->info('Tables seeded!');
    }
}
