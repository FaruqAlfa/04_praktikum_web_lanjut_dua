<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'title' => 'Pengalaman Fahmi',
            'body' => ' Kuliah juga merupakan kesempatan untuk bergaul dan berinteraksi dengan teman-teman baru. 
            Mahasiswa mungkin bergabung dengan klub atau organisasi kampus untuk memperluas lingkaran sosial mereka.'
        ],

        [
            'title' => 'Pengalaman Rizqi',
            'body' => '   Saya dapat menemukan minat dan bakat baru yang tidak saya sadari sebelumnya
            serta dapat memperluas minat Saya melalui mata kuliah, kegiatan ekstrakurikuler,
             dan pekerjaan magang.'
        ]
    ];
    DB::table('experiences')->insert($data);
    }
    }
