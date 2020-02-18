<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sp extends Model
{
    protected $table = 'sp';
    protected $fillable = [
	    	'carrera_id', 
	    	'curso_id', 
	    	'ciclo',
		];
}
