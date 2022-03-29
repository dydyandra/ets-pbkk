<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasien::create([
            'nama' => 'Dyandra Paramitha',
            'slug' => 'dyandra-paramitha'
        ]);


        Pasien::create([
            'nama' => 'Dias Tri Kurniasari',
            'slug' => 'dias-tri-kurniasari'
        ]);

        Pasien::create([
            'nama' => 'Andika Nugrahanto',
            'slug' => 'andika-nugrahanto'
        ]);


        Pasien::create([
            'nama' => 'Nur Hidayati',
            'slug' => 'nur-hidayati'
        ]);


    }
}
