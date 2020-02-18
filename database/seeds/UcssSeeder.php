<?php

use App\Ucss;
use Illuminate\Database\Seeder;

class UcssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ucss::create([
        	'carrera_id' => 1,
        	'curso_id' => 1,
        	'ciclo' => 1,
        ]);
        Ucss::create([
        	'carrera_id' => 1,
        	'curso_id' => 3,
        	'ciclo' => 2,
        ]);
        Ucss::create([
        	'carrera_id' => 1,
        	'curso_id' => 5,
        	'ciclo' => 2,
        ]);
        Ucss::create([
        	'carrera_id' => 1,
        	'curso_id' => 7,
        	'ciclo' => 3,
        ]);
    }
}
