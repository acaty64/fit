<?php

namespace Tests\Unit;

use App\Equivalencia;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class EquivalenciasTest extends TestCase
{
	use DatabaseTransactions;

    /** 
     * @test 
     * @testdox Creación de Equivalencia
     */
    public function it_create_equivalencia()
    {
        $request = [
        	'cucss_id' => 1,
        	'csp_id' => 1,
        ];

        $response = $this->post(route('app.equivalencias.create'), $request);
        $this->assertDatabaseHas('equivalencias', $request);
    }

    /** 
     * @test 
     * @testdox Edición de Equivalencia
     */
    public function it_edit_equivalencia()
    {
        // Artisan::call('db:seed', ['--class' => 'CucssSeeder', '--database' => 'mysql_tests']);
        // Artisan::call('db:seed', ['--class' => 'CspSeeder', '--database' => 'mysql_tests']);
        // Artisan::call('db:seed', ['--class' => 'UcssSeeder', '--database' => 'mysql_tests']);
        // Artisan::call('db:seed', ['--class' => 'SpSeeder', '--database' => 'mysql_tests']);
        
        $data = [
            'cucss_id' => 1,
            'csp_id' => 1,
        ];

        $equiv = Equivalencia::create($data);

        $request = [
            'id' => $equiv->id,
            'cucss_id' => 2,
            'csp_id' => 2,
        ];

        $response = $this->post(route('app.equivalencias.edit'), $request);
        $this->assertDatabaseHas('equivalencias', $request);
        $this->assertDatabaseMissing('equivalencias', $equiv->toArray());
    }

    /** 
     * @test 
     * @testdox Eliminación de Equivalencia
     */
    public function it_delete_equivalencia()
    {
        
        $data = [
            'cucss_id' => 1,
            'csp_id' => 1,
        ];

        $equiv = Equivalencia::create($data);

        $this->assertDatabaseHas('equivalencias', $equiv->toArray());

        $request = [
            'id' => $equiv->id,
        ];

        $response = $this->post(route('app.equivalencias.destroy'), $request);

        $this->assertDatabaseMissing('equivalencias', $equiv->toArray());
    }



}
