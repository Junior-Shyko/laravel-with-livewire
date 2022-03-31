<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RequerimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
            DB::table("requisitions")->insert([
                'fkcodcategoria' => $faker->numberBetween(1, 9),
                'fkcodprograma' => $faker->numberBetween(1, 10),
                'fkcodhospital' => $faker->numberBetween(1, 10),
                'datainicio' => $faker->dateTimeBetween($startDate = '-2 years', $interval = '+ 5 days', $timezone = null),
                'datafinal' => null,
                'matricula'=> $faker->randomDigit(),
                'crm' => $faker->randomDigit(),
                'fkcodestado' => $faker->numberBetween(1, 27),
                'fkcodcurso'=> $faker->numberBetween(1, 5),
                'ano'=> '2021',
                'fkcodcidade' => $faker->numberBetween(1, 27),
                'user_id' => $faker->numberBetween(1, 2),
                'informacoes' => $faker->sentence(8, true),
                'observacoes' => $faker->paragraph(3, true),
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $interval = '+ 5 days', $timezone = null),
                'updated_at' =>$faker->dateTimeBetween($startDate = '-2 years', $interval = '+ 5 days', $timezone = null)
            ]);
        }
       
    }
}
