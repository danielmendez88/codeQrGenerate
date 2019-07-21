<?php

namespace CodeQr\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use CodeQr\Personal;
use CodeQr\Models\AreaAdscripcion as example;
use CodeQr\Models\OrganoAdministrativo as Organo;

class personalController extends Controller
{
    //
    public function index(){
    	return view('pages.formpersonal');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	/**
    	*	vamos a enviar todos los datos para que se actualice completamente el registro del personal
    	*/
    	$area = new example();
    	$orgAdmin = new Organo();
    	$decrypted = base64_decode($id);
        $personalDetails = Personal::where('numeroEnlace', $decrypted)->firstOrFail();
        $organoAdmin = $orgAdmin::pluck('organo', 'id');
        $areaAdscrip = $area::pluck('area', 'id');

        return view('pages.formpersonal', compact('personalDetails', 'organoAdmin', 'areaAdscrip'));
    }
}
