<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
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
            'name' => 'Administrador',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'created_at'=>$createdDate,
            'updated_at'=>$createdDate
        ];
        User::insert($data);
    }
}
