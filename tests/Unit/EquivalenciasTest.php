<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class EquivalenciasTest extends TestCase
{
	use DatabaseTransactions;

    /** 
     * @test
     */
    public function it_create_equivalencias()
    {
        Artisan::call('db:seed', ['--class' => 'CucssSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'CspSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'UcssSeeder', '--database' => 'mysql_tests']);
        Artisan::call('db:seed', ['--class' => 'SpSeeder', '--database' => 'mysql_tests']);
        $request = [
        	'cucss_id' => 1,
        	'csp_id' => 1,
        ];

        $response = $this->post(route('app.equivalencias.create'), $request);
        $this->assertDatabaseHas('equivalencias', $request);
    }
}
