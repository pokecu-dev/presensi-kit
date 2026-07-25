<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,'username' => 'admin','role' => 'admin','password' => '$2y$12$jPTXeqvgWpKW4LSZMcxyhOgWPw1XfDvaW7DV1WJwkjytnqasrof0C'
        ]);
        \App\Models\User::factory(5)->create();
    }
}
