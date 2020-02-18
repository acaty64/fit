<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ucss extends Model
{
    protected $table = 'ucss';
    protected $fillable = [
	    	'carrera_id', 
	    	'curso_id', 
	    	'ciclo',
		];
}
