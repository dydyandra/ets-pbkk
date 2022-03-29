<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokter::create([
            'nama' => 'Erza Janitradevi',
            'slug' => 'erza-janitradevi'
        ]);


        Dokter::create([
            'nama' => 'Aristya Vika',
            'slug' => 'aristya-vika'
        ]);

        Dokter::create([
            'nama' => 'Daffa Azhar',
            'slug' => 'daffa-azhar'
        ]);
    }
}
