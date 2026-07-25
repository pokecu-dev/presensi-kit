<?php

namespace Database\Factories;

use App\Models\Siswa;
use App\Models\User;
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

        $gender = $this->faker->randomElements(['male','female']);

        

        return [
            'nis' => '00' . $this->faker->numberBetween(90000000,99999999),
            'nama' => $this->faker->name($gender),
            'id_kelas' => $id_kelas,
            'id_user' => User::factory()->create(['role' => 'siswa'])->id,
            'gender' => $gender == 'male' ? 'l' : 'p'
            
        ];
    }
}
