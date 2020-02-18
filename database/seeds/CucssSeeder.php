<?php

use App\Cucss;
use Illuminate\Database\Seeder;

class CucssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cucss::create([
        	'curso' => 'UCCS01',
        	'lcurso' => 'UCCS01',
        	'wcurso' => 'CURSO UCSS 1',
        	'creditos' => 4,
        	'syllabus_id' => 1
        ]);
        Cucss::create([
        	'curso' => 'UCCS02',
        	'lcurso' => 'UCCS02',
        	'wcurso' => 'CURSO UCSS 2',
        	'creditos' => 4,
        	'syllabus_id' => 3
        ]);
        Cucss::create([
        	'curso' => 'UCCS03',
        	'lcurso' => 'UCCS03',
        	'wcurso' => 'CURSO UCSS 3',
        	'creditos' => 4,
        	'syllabus_id' => 5
        ]);
        Cucss::create([
        	'curso' => 'UCCS04',
        	'lcurso' => 'UCCS04',
        	'wcurso' => 'CURSO UCSS 4',
        	'creditos' => 4,
        	'syllabus_id' => 7
        ]);
    }
}
