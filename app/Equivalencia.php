<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equivalencia extends Model
{
    protected $table = 'equivalencias';
    protected $fillable = ['cucss_id', 'csp_id']
}
