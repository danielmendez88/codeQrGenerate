<?php

namespace CodeQr\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use CodeQr\Personal;
use Illuminate\Support\Facades\Auth;

class incideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personales = \CodeQr\Personal::all();
        // dd($personales);
        return view('index', compact('personales'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #usuario logueado
        $userId = Auth::user()->id;
        // si hay un numero de enalace
        if ($id) {
            # code...
            $decrypted = base64_decode($id);
            try {
                $sql = \CodeQr\Personal::select('personals.id AS idpersonal', 'numeroEnlace', 'generado', 'hashedNumero', 'nombre', 'categoria', 'puesto', 'activo')
                                ->where('personals.numeroEnlace', '=', $decrypted)
                                ->leftJoin('organo_administrativos', 'personals.organo_id', '=', 'organo_administrativos.id')
                                ->leftJoin('area_adscripcions', 'personals.adscripcion_id', '=', 'area_adscripcions.id')
                                ->get();
                if ($sql) {
                    // validamos si no ha sido generado anteriormente
                    if ($sql[0]->generado == 0) {
                        $update = Personal::select('generado', 'hashedNumero')
                                ->where('numeroEnlace', '=', $sql[0]->numeroEnlace)
                                ->update(['generado' => 1, 'hashedNumero' => base64_encode($decrypted)]);
                        # despúes de actualizar se agregan a la tabla pivote el usuario que está realizando la operación
                        $personal = \CodeQr\Personal::find($sql[0]->idpersonal);
                        $personal->usuarios()->attach($userId);
                        # primera vez
                        $base64 = base64_encode($decrypted);
                        $qrCode = \QrCode::format('png')
                            ->size(200)
                            ->color(176,154,91)
                            ->generate('localhost:8000/personal/generado/'.$base64);

                        /*return view('qrCode')->with('codes', $qrCode);*/
                        $codigo = $qrCode;
                        $nombre = $sql[0]->nombre;
                        $enlace = $sql[0]->numeroEnlace;
                        $generado = $sql[0]->generado;
                        $categoria = $sql[0]->categoria;
                        $puesto = $sql[0]->puesto;
                        $activo = $sql[0]->activo;
                        $numeroEnlace = $sql[0]->numeroEnlace;
                        return view('pages.perfil', compact('codigo', 'nombre', 'enlace', 'generado', 'categoria', 'puesto', 'activo', 'numeroEnlace'));
                    }
                    else
                    {
                        $base64 = base64_encode($sql[0]->numeroEnlace);
                        # más de una vez
                        $qrCode = \QrCode::format('png')
                            ->size(200)
                            ->color(176,154,91)
                            ->generate('localhost:8000/personal/generado/'.$base64);

                        #agregar al usuario que vuelve a generarlo
                        $personal = \CodeQr\Personal::find($sql[0]->idpersonal);
                        $personal->usuarios()->attach($userId);

  
                        $codigo = $qrCode;
                        $nombre = $sql[0]->nombre;
                        $enlace = $sql[0]->numeroEnlace;
                        $generado = $sql[0]->generado;
                        $categoria = $sql[0]->categoria;
                        $puesto = $sql[0]->puesto;
                        $activo = $sql[0]->activo;
                        $numeroEnlace = $sql[0]->numeroEnlace;
                        //return view('qrCode')->with('codes', $qrCode);
                        return view('pages.perfil', compact('codigo', 'nombre', 'enlace', 'generado', 'categoria', 'puesto', 'activo', 'numeroEnlace'));
                    }
                    # validamos si existe la consulta
                }
            } catch (Exception $e) {
                
            }
        }
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
}
