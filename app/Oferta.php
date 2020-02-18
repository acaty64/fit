<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'ofertas';
    protected $fillable = [
	    	'carrera_id', 
	    	'curso_id', 
	    	'semestre',
	    	'type',
		];
}
