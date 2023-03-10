<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "user_name" => 'admin',
            "name" => 'administrator',
            "email" => 'archiesua@gmail.com',
            "password" => bcrypt('password')
        ]);
    }
}
