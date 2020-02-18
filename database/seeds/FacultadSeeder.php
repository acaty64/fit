<?php

use App\Facultad;
use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facultad::create([
        	'facultad' => 'FCEC',
        	'wfacultad' => 'Facultad de Ciencias Economicas y Comerciales',
        	'universidad' => 'UCSS',
        ]);
        Facultad::create([
        	'facultad' => 'FCA',
        	'wfacultad' => 'Facultad de Ciencias Administrativas',
        	'universidad' => 'SP',
        ]);
    }
}
