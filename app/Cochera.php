<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cochera extends Model
{
	protected $table="cochera";
    //
    public function probando($cochera)
    {    	
    	echo "si estoy en el modelo";
    }
}
