<?php

use App\Prereq;
use Illuminate\Database\Seeder;

class PrereqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prereq::create([
        	'curso_id' => 2,
        	'prereq_id' => 1,
        	'carrera_id' => 1
        ]);
        Prereq::create([
        	'curso_id' => 4,
        	'prereq_id' => 2,
        	'carrera_id' => 1
        ]);
        
    }
}
