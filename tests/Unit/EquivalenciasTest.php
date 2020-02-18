<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\TestCase;

class EquivalenciasTest extends TestCase
{
	use DatabaseMigrations;

    /** 
     * @test
     */
    public function it_create_equivalencias()
    {
$this->markTestIncomplete('Corregir Seeder');    	
        Artisan::call('db:seed', ['--class' => 'CucssSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'CspSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'UcssSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'SpSeeder', '--database' => 'mysql_tests']);
        $request([
        	'cucss' => 1,
        	'csp' => 1,
        ]);

        $this->post('/equivalencias/create', $request);
    }
}
