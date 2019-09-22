<?php

namespace CodeQr\Http\Controllers;

use Illuminate\Http\Request;
use CodeQr\Personal;
use CodeQr\Models\AreaAdscripcion as Area;
use CodeQr\Models\OrganoAdministrativo as Organo;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personalCount = Personal::count();
        $personalAlta = Personal::WHERE('activo', '=', 1)->get();
        $personalBaja = Personal::WHERE('activo', '=', 0)->get();
        $personalAltaCount = $personalAlta->count();
        $personalBajaCount = $personalBaja->count();
        return view('page.admin', compact('personalCount', 'personalAltaCount', 'personalBajaCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nenlace' => 'required|regex:/^[0-9]+$/',
            'nombre' => 'required|min:3',
            'apaterno' => 'required|min:3',
            'amaterno' => 'required|min:3',
            'categoria' => 'required',
            'organoid' => 'required',
            'adscripcionid' => 'required',
            'puesto' => 'required|min:3'
        ],[
            'nenlace.required' => 'Número de enlace requerido',
            'nombre.required' => 'El Nombre es requerido',
            'nombre.min' => 'Nombre muy corto',
            'apaterno.required' => 'Apellido paterno requerido',
            'apaterno.min' => 'apellido parterno muy corto',
            'amaterno.required' => 'Apellido Materno requerido',
            'amaterno.min' => 'apellido materno muy corto',
            'categoria.required' => 'Categoria requerida',
            'organoid.required' => 'Organo administrativo requerido',
            'adscripcionid.required' => 'Área de adscripción requerido',
            'puesto.required' => 'Puesto requerido',
            'puesto.min' => 'el puesto es muy corto'
        ]);
        // agregamos el registro a la base de datos
        $encode64 = base64_encode($request->nenlace);
        $personal = new Personal;
        $personal->numeroEnlace = trim($request->nenlace);
        $personal->categoria = trim($request->categoria);
        $personal->apaterno = trim($request->apaterno);
        $personal->amaterno = trim($request->amaterno);
        $personal->nombre = trim($request->nombre);
        $personal->puesto = trim($request->puesto);
        $personal->adscripcion_id = trim($request->adscripcionid);
        $personal->organo_id = trim($request->organoid);
        $personal->activo = true;
        $personal->generado = false;
        $personal->hashedNumero = trim($encode64);
        // guardar registro
        $personal->save();
        // rediteccionar
        return Redirect::to("/administrador/registro-personal")->withSuccess('Personal Agregado éxitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $numeroEnlace = Crypt::decrypt($id);
        $area = new Area();
        $orgAdmin = new Organo();
        $personalDetails = Personal::where('numeroEnlace', $numeroEnlace)->firstOrFail();
        $organoAdmin = $orgAdmin::pluck('organo', 'id');
        $areaAdscrip = $area::pluck('area', 'id');

        return view('page.updated', compact('personalDetails', 'organoAdmin', 'areaAdscrip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 
     */
    public function addpersonal()
    {
        $area = Area::all();
        $organo = Organo::all();
        return view('page.addpersonal', compact('area', 'organo'));
    }
    /**
     * 
     */
    public function registroPersonal()
    {
        $personales = new Personal;
        $person = $personales->all();
        return view('page.registroPersonal', compact('person'));
    }

    /**
    *
    */
    public function updatePersonal()
    {
        $personales = new Personal;
        $person = $personales->all();
        return view('page.updatePersonal', compact('person'));
    }
}
