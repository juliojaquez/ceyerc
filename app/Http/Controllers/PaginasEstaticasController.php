<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secciones;
use App\Productos;
class PaginasEstaticasController extends Controller
{
    function indexsecciones() {
    	
    	$secciones = Secciones::all();
    	
	    return view('admin.secciones.seccionesindex',compact('secciones'));
    }

    function indexproductos($id) {

    	$productos = Productos::where('idSeccion', $id)->get();
    	return view('productos.catalogo_productos', compact('productos'));
    }
}
