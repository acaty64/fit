<?php

use App\Csp;
use Illuminate\Database\Seeder;

class CspSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Csp::create([
        	'curso' => 'SP0001',
        	'lcurso' => 'SP0001',
        	'wcurso' => 'CURSO SP 1',
        	'creditos' => 3,
        	'syllabus_id' => 2
        ]);
        Csp::create([
        	'curso' => 'SP0002',
        	'lcurso' => 'SP0002',
        	'wcurso' => 'CURSO SP 2',
        	'creditos' => 3,
        	'syllabus_id' => 4
        ]);
        Csp::create([
        	'curso' => 'SP0003',
        	'lcurso' => 'SP0003',
        	'wcurso' => 'CURSO SP 3',
        	'creditos' => 3,
        	'syllabus_id' => 6
        ]);
        Csp::create([
        	'curso' => 'SP0004',
        	'lcurso' => 'SP0004',
        	'wcurso' => 'CURSO SP 4',
        	'creditos' => 3,
        	'syllabus_id' => 8
        ]);
    }
}
