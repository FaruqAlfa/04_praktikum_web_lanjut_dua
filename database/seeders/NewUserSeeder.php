<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Fahmi',
            'name' => 'Mukhamad Faruq Al Fahmi',
            'email' => 'alfafahmi172@gmail.com',
            'password' => Hash::make('fahmi123')
        ]);
    }
}
