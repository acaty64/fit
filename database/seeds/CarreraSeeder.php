<?php

use App\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
        	'carrera' => 'ADM',
        	'wcarrera' => 'ADMINISTRACION',
        	'facultad_id' => 1
        ]);
    }
}
