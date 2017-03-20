<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use PamDogs\User;
use Auth;
use Carbon\Carbon;
use Hash;

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
            'email' => 'required|email|max:150',
            'pass'  => 'required|max:200',
            'pass_confirm' => 'required|same:pass|max:200'
        ]);

        $user = User::firstOrNew(['email' => $request->email]);
        if(!empty($user->facebook_id))
        {
            return response()->json(['error' => 'Debe iniciar sesión con Facebook.'], 422);
        }
        if(empty($user->password))
        {
            $user->password = bcrypt($request->pass);
            $user->save();
        }
        else
        {
            if(!Hash::check($request->pass, $user->password))
            {
                return response()->json(['error' => 'Usuario registrado previamente, pero las contraseñas no coinciden.'], 422);
            }
        }

        Auth::loginUsingId($user->id);
        //return redirect()->route('registro.cliente');
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

        $request->nacimiento = Carbon::createFromFormat('d/m/Y',$request->nacimiento)->toDateString();

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
        //return view('main.formulario-mascota');

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
