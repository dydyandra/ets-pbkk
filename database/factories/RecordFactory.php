<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama = $this->faker->sentence(mt_rand(3,10));
        $slug = Str::slug($nama, '-');

        return [ 
            'nama' => $nama,
            'slug' => $slug,
            'pasien_id' => mt_rand(1,4),
            'dokter_id' => mt_rand(1,3),
            'kondisi' => $this->faker->randomElement(['Sehat', 'Tidak Sehat']),
            'suhu' => $this->faker->numberBetween(35, 45),
            'gambar' => $this->faker->word()
        ];
    }
}
