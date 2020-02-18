<?php

use App\Sp;
use Illuminate\Database\Seeder;

class SpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sp::create([
        	'carrera_id' => 2,
        	'curso_id' => 2,
        	'ciclo' => 1,
        ]);
        Sp::create([
        	'carrera_id' => 2,
        	'curso_id' => 4,
        	'ciclo' => 1,
        ]);
        Sp::create([
        	'carrera_id' => 2,
        	'curso_id' => 6,
        	'ciclo' => 2,
        ]);
        Sp::create([
        	'carrera_id' => 2,
        	'curso_id' => 8,
        	'ciclo' => 3,
        ]);
    }
}
