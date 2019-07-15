<?php

namespace CodeQr\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use CodeQr\Personal;

class generadoController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	if ($id) {
    		# generamos la consulta
    		$decrypted = base64_decode($id);
    		try {
    			#generamos la consulta
    			$query = Personal::select('personals.id AS idpersonal', 'numeroEnlace', 'generado', 'hashedNumero', 'nombre', 'categoria', 'puesto', 'activo', 'organo_administrativos.organo AS orgAdmin', 'area_adscripcions.area AS areaAdscipcion')
    			                   ->where('personals.numeroEnlace', '=', $decrypted)
    			                   ->leftJoin('organo_administrativos', 'personals.organo_id', '=', 'organo_administrativos.id')
    			                   ->leftJoin('area_adscripcions', 'personals.adscripcion_id', '=', 'area_adscripcions.id')
    			                   ->get();
    			#generamos if
    			 if ($query) {
    			 	# validamos si se han generado anteriormente
    			 	if ($query[0]->activo == true) {
    			 		# validamos si está en activo
                        $nombre = $query[0]->nombre;
                        $enlace = $query[0]->numeroEnlace;
                        $generado = $query[0]->generado;
                        $categoria = $query[0]->categoria;
                        $puesto = $query[0]->puesto;
                        $activo = $query[0]->activo;
                        $numeroEnlace = $query[0]->numeroEnlace;
                        $orgAdmin = $query[0]->orgAdmin;
                        $areaAdscipcion = $query[0]->areaAdscipcion;
                        return view('pages.credencial', compact('codigo', 'nombre', 'enlace', 'generado', 'categoria', 'puesto', 'activo', 'numeroEnlace', 'orgAdmin', 'areaAdscipcion'));
    			 	}
    			 	else
    			 	{
                        return view('pages.nocredencial');
    			 		# de lo contrario se direcciona con un mensaje
    			 	}
    			 }
    		} catch (Exception $e) {
    			
    		}
    	}
    }
}
