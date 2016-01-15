<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cochera;

class CocheraController extends Controller
{    
    public function guardarCocheras( )
    {
    	$cochera = Cochera::all();
    	$cocheras = json_decode($_GET['cochera']);
    	$cocheraBd = new Cochera;
		$cocheraBd->capacidad=$cocheras->capacidad;
        $cocheraBd->certificado=$cocheras->certificado;
        $cocheraBd->denuncias=$cocheras->denuncias;
        $cocheraBd->departamento=$cocheras->departamento;
        $cocheraBd->direccion=$cocheras->direccion;
        $cocheraBd->distrito=$cocheras->distrito;
        $cocheraBd->estado=$cocheras->estado;
        $cocheraBd->horarioTarifa1Fin=$cocheras->horarioTarifa1Fin;
        $cocheraBd->horarioTarifa1Inicio=$cocheras->horarioTarifa1Inicio;
        $cocheraBd->horarioTarifa2Fin=$cocheras->horarioTarifa2Fin;
        $cocheraBd->id=$cocheras->id;
        $cocheraBd->latitud=$cocheras->latitud;
        $cocheraBd->libres=$cocheras->libres;
        $cocheraBd->longitud=$cocheras->longitud;
        $cocheraBd->nombre=$cocheras->nombre;
        $cocheraBd->nota=$cocheras->nota;
        $cocheraBd->pais=$cocheras->pais;
        $cocheraBd->privada=$cocheras->privada;
        $cocheraBd->provincia=$cocheras->provincia;
        $cocheraBd->recomendaciones=$cocheras->recomendaciones;
        $cocheraBd->referencia=$cocheras->referencia;
        $cocheraBd->tarifa1=$cocheras->tarifa1;
        $cocheraBd->tarifa2=$cocheras->tarifa2;
        $cocheraBd->techado=$cocheras->techado;
        $cocheraBd->telefonos=$cocheras->telefonos;
        $cocheraBd->valetParking=$cocheras->valetParking;
        $cocheraBd->website=$cocheras->website; 
		$cocheraBd->save();

    	//echo "Los datos de la bd: ".$cochera->id;
    	//$cochera->all()=$cocheras->id;
    	//$mensaje=$cochera->probando($_GET['cochera'])=$cocheras->id;
    	//echo "hola"=$cocheras->id;
    	 //$cocheras = json_decode($_GET['cochera'])=$cocheras->id;
 		//echo "Id de la cochera: ".$cocheras->id."</br>"=$cocheras->id;
 		//DB:
 		/*
	    foreach($cocheras as $cochera)
	    {
	        echo $cochera . '=$cocheras->id; '=$cocheras->id;
	       // echo $cochera->nombre . '=$cocheras->id; '=$cocheras->id;
	        //echo $cochera->precio . '=$cocheras->id; '=$cocheras->id;
	        echo '<br/>'=$cocheras->id;
	    }*/
    	//return response()->json(['response' => $_GET['cochera']])=$cocheras->id;
    	//$cocheras=$cocheras->id;
    	//return response()->json(['response' => 'This is get method'])=$cocheras->id;
    }    
}
