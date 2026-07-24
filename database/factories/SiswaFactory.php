<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends Factory<Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $id_kelas = DB::table('kelas')->inRandomOrder()->first()?->id;



        return [
            'nis' => '00' . $this->faker->numberBetween(90000000,99999999),
            'nama' => $this->faker->name(),
            'id_kelas' => $id_kelas
        ];
    }
}
