<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 50; $i++){
        DB::table('tb_mahasiswa')->insert([
            'nim' => null,
            'nama' => $faker->name,
            'id_jurusan' => $faker->numberBetween(1,2),
            'umur'=> $faker->numberBetween(18,35)
        ]);
    }
    }
}
