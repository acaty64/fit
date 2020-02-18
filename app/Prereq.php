<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prereq extends Model
{
    protected $table = 'prereqs';
    protected $fillable = [
	    	'curso_id', 
	    	'prereq_id', 
	    	'carrera_id',
		];
}
