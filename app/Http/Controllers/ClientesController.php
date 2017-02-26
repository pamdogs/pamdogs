<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use PamDogs\User;
use Auth;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Guarda E-Mail (1er paso de registro)
        $this->validate($request, [
            'email' => 'required|max:150',
        ]);

        $user = User::firstOrCreate(['email' => $request->email]);

        Auth::loginUsingId($user->id);
        return view('main.formulario-de-registro');

    }

    public function storeCliente(Request $request)
    {
        //  (2do paso de registro)
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'nacimiento' => 'required|max:255',
            'telefono' => 'required|max:255',
            'dni_tipo' => 'required|max:255',
            'dni_nro' => 'required|max:255',
        ]);

        $user = User::where(['email' => Auth::user()->email])
                ->update([
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'nacimiento' => $request->nacimiento,
                    'telefono' => $request->telefono,
                    'dni_tipo' => $request->dni_tipo,
                    'dni_numero' => $request->dni_nro
                    ]);

        //Auth::loginUsingId($user->id);
        return view('main.formulario-mascota');

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
