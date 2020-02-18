<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribucion extends Model
{
    protected $table = 'distribuciones';
    protected $fillable = [
	    	'carrera_id', 
	    	'semestre', 
	    	'qcursos',
	    	'tsemestre',
		];
}
