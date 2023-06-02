<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\peoples;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        peoples::insert([
            'nama'=>"indi",
            'alamat'=>"london",
            'umur'=>17,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"siti",
            'alamat'=>"cbr",
            'umur'=>18,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"ineu",
            'alamat'=>"skmj",
            'umur'=>17,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"fatma",
            'alamat'=>"smpk",
            'umur'=>17,
            'statusPekerjaan'=>"pelajar",
        ]);
        peoples::insert([
            'nama'=>"zahwa",
            'alamat'=>"tbs",
            'umur'=>18,
            'statusPekerjaan'=>"pelajar",
        ]);
    }
}
