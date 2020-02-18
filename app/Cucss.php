<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cucss extends Model
{
    protected $table = 'cucss';
    protected $fillable = [
	    	'carrera_id', 
	    	'curso_id', 
	    	'ciclo',
	    	'syllabus_id',
		];    
}
