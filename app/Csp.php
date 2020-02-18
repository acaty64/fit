<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csp extends Model
{
    protected $table = 'csp';
    protected $fillable = [
	    	'curso', 
	    	'wcurso', 
	    	'creditos',
	    	'syllabus_id',
		];
}
