<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FacultadSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(CucssSeeder::class);
        $this->call(CspSeeder::class);
        $this->call(UcssSeeder::class);
        $this->call(SpSeeder::class);
        $this->call(EquivalenciaSeeder::class);
        $this->call(PrereqSeeder::class);
        $this->call(OfertaSeeder::class);
        $this->call(DistribucionSeeder::class);
    }
}
