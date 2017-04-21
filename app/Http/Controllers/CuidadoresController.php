<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use PamDogs\Cuidador;
use PamDogs\Servicio;
use PamDogs\User;
use Auth;
use Carbon\Carbon;

class CuidadoresController extends Controller
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
        //
        $this->validate($request, [
            'titulo' => 'required|max:50',
            'descripcion'  => 'required|min:200',
            'experiencia' => 'required',
            'tam' => 'required',
            'vivienda' => 'required',
              //Probar la validacion del espacio ->
            'espacio' => 'required',
            'auto' => 'required',
              //Probar la validacion de las mascotas ->
            'mascota_perro' => 'required_without_all:mascota_gato,mascota_ninguna',
            'mascota_gato' => 'required_without_all:mascota_perro,mascota_ninguna',
            'pais' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'rango' => 'required|numeric|min:100|max:2000',
            'hospedaje_tar_24h' => 'required_with:hospedaje_tar_h_extra,hospedaje_mascota_extra,hospedaje_semana',
            'hospedaje_tar_h_extra' => 'required_with:hospedaje_tar_24h,hospedaje_mascota_extra,hospedaje_semana',
            'hospedaje_mascota_extra' => 'required_with:hospedaje_tar_24h,hospedaje_tar_h_extra,hospedaje_semana',
            'hospedaje_semana' => 'required_with:hospedaje_tar_24h,hospedaje_tar_h_extra,hospedaje_mascota_extra',
            'guarderia_tar_h' => 'required_with:guarderia_mascota_extra,guarderia_turno',
            'guarderia_mascota_extra' => 'required_with:guarderia_tar_h,guarderia_turno',
            'guarderia_turno' => 'required_with:guarderia_tar_h,guarderia_mascota_extra',
            'paseo_tar_h' => 'required_with:paseo_mascota_extra,paseo_horario,paseo_semana',
            'paseo_mascota_extra' => 'required_with:paseo_tar_h,paseo_hora_desde,paseo_hora_hasta,paseo_semana',
            'paseo_hora_desde' => 'required_with:paseo_tar_h,paseo_mascota_extra,paseo_hora_hasta,paseo_semana',
            'paseo_hora_hasta' => 'required_with:paseo_tar_h,paseo_mascota_extra,paseo_hora_desde,paseo_semana',
            'paseo_semana' => 'required_with:paseo_tar_h,paseo_mascota_extra,paseo_hora_desde,paseo_hora_hasta',
            'domicilio' => 'required'
        ]);

        if($request->file('avatar'))
        {
          $file = $request->file('avatar');
          $name = 'PamDogsAvatar_'.time().'.'.$file->getClientOriginalExtension();
          $path = public_path() . '/images/avatars/users';
          $file->move($path, $name);
          User::where('id', Auth::user()->id)->update(['avatar' => $name]);
        }
        else {
          if(isset(Auth::user()->avatar))
          {
            $name = Auth::user()->avatar;
          }
          else {
            return response()->json(['error' => 'Debe seleccionar una foto de perfil.'], 422);
          }
        }

        $cuidador = Cuidador::firstOrNew(['user_id' => Auth::user()->id]);

        $cuidador->titulo = $request->titulo;
        $cuidador->descripcion = $request->descripcion;
        $cuidador->experiencia = $request->experiencia;

        foreach ($request->tam as $tam => $value) {
          $cuidador->$value = 1;
        }

        $cuidador->vivienda = $request->vivienda;

        foreach ($request->espacio as $espacio => $value) {
          $cuidador->$value = 1;
        }

        $cuidador->auto = $request->auto;

        $cuidador->mascota_perro = isset($request->mascota_perro) ? $request->mascota_perro : 0;
        $cuidador->mascota_gato = isset($request->mascota_gato) ? $request->mascota_gato : 0;

        $cuidador->pais = $request->pais;
        $cuidador->ciudad = $request->ciudad;
        $cuidador->direccion = $request->direccion;
        $cuidador->rango = $request->rango;
        $cuidador->domicilio = $request->domicilio;
        $cuidador->contratado = 0;
        //dd($cuidador);
        $cuidador->latitud = $request->latitud;
        $cuidador->longitud = $request->longitud;
        $cuidador->save();

        if(isset($request->hospedaje_tar_24h))
        {
          $hospedaje = Servicio::firstOrNew(['nombre' => 'Hospedaje', 'cuidador_id' => $cuidador->id]);
          $hospedaje->tar_24h = $request->hospedaje_tar_24h;
          $hospedaje->tar_h_extra = $request->hospedaje_tar_h_extra;
          $hospedaje->mascota_extra = $request->hospedaje_mascota_extra;
          foreach ($request->hospedaje_semana as $semana => $value) {
            $hospedaje->$value = 1;
          }
          $hospedaje->save();
        }

        if(isset($request->guarderia_tar_h))
        {
          $guarderia = Servicio::firstOrNew(['nombre' => 'Guarderia', 'cuidador_id' => $cuidador->id]);
          $guarderia->tar_h = $request->guarderia_tar_h;
          $guarderia->mascota_extra = $request->guarderia_mascota_extra;
          foreach ($request->guarderia_turno as $turno => $value) {
            $guarderia->$value = 1;
          }
          $guarderia->save();
        }

        if(isset($request->paseo_tar_h))
        {
          $paseo = Servicio::firstOrNew(['nombre' => 'Paseo', 'cuidador_id' => $cuidador->id]);
          $paseo->tar_h = $request->paseo_tar_h;
          $paseo->mascota_extra = $request->paseo_mascota_extra;

          $paseo->hora_desde = Carbon::parse($request->paseo_hora_desde)->toTimeString();
          $paseo->hora_hasta = Carbon::parse($request->paseo_hora_hasta)->toTimeString();

          //return response()->json(['horas_desde' => $paseo->hora_desde, 'horas_hasta' => $paseo->hora_hasta]);
          foreach ($request->paseo_semana as $semana => $value) {
            $paseo->$value = 1;
          }
          $paseo->save();
        }

        /*return response()->json(['Cuidador' => $cuidador,
                                'Hospedaje' => $hospedaje,
                                'Guarderia' => $guarderia,
                                'Paseo' => $paseo]);*/
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
