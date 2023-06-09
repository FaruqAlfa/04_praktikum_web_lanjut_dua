<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $nilai=[[
             'nama' => 'Mukhamad Faruq Al Fahmi',
             'email' => 'alfafahmi172@gmail.com',
             'jurusan' => 'Teknik informatika',
             'alamat' => 'Desa Papar, Kabupaten Kediri'

         ],
        [
            'nama' => 'Rizqi Rohmatul Huda',
            'email' => 'rizkyrhuda@gmail.com',
            'jurusan' => 'Teknik informatika',
            'alamat' => 'Blitar, Wonotirto, GunungGede'

        ]
    ];
    DB::table('profiles')->insert($nilai);
    }
}
