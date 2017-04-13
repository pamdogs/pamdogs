<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use PamDogs\Mascota;
use Auth;

class MascotasController extends Controller
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
        $this->validate($request, [
            'avatar' => 'required|image',
            'nombre' => 'required|max:255',
            'nacimiento' => 'required|max:255',
            'genero' => 'required',
            'raza' => 'required|max:255',
            'personalidad' => 'required|max:255',
            'comida_tipo' => 'required|max:255',
            'comida_hora' => 'required|max:255',
            'hora_paseo' => 'required|max:255',
            'rutina' => 'required|max:255',
            'duerme' => 'required|max:255',
            'con_perros' => 'required',
            'con_chicos' => 'required',
            'salta' => 'required',
            'celo' => 'required',
            'vacuna' => 'required',
            'esterilizado' => 'required',
            'vet_nombre' => 'required|max:255',
            'vet_telefono' => 'required|max:255',
            'vet_direccion' => 'required|max:255',
            'seguro' => 'required',
            'compania_seguro' => 'required_if:seguro,1'
        ]);

        $file = $request->file('avatar');
        $name = 'PamDogs_PetAvatar_'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/images/avatars/pets';
        $file->move($path, $name);

        $mascota = new Mascota();

        $mascota->nombre = $request->nombre;
        $mascota->avatar = $name;
        $mascota->nacimiento = $request->nacimiento;
        $mascota->genero = $request->genero;
        $mascota->raza = $request->raza;
        $mascota->personalidad = $request->personalidad;
        $mascota->comida_tipo = $request->comida_tipo;
        $mascota->comida_hora = $request->comida_hora;
        $mascota->hora_paseo = $request->hora_paseo;
        $mascota->rutina = $request->rutina;
        $mascota->duerme = $request->duerme;
        $mascota->con_perros = $request->con_perros;
        $mascota->con_chicos = $request->con_chicos;
        $mascota->salta = $request->salta;
        $mascota->celo = $request->celo;
        $mascota->vacuna = $request->vacuna;
        $mascota->esterilizado = $request->esterilizado;
        $mascota->vet_nombre = $request->vet_nombre;
        $mascota->vet_telefono = $request->vet_telefono;
        $mascota->vet_direccion = $request->vet_direccion;
        $mascota->seguro = $request->seguro;
        $mascota->compania_seguro = $request->compania_seguro;
        $mascota->user_id = Auth::user()->id;
        $mascota->save();

        //return view('main.index');
        return redirect('/');
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
