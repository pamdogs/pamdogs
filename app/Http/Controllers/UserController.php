<?php

namespace PamDogs\Http\Controllers;

use Illuminate\Http\Request;

use PamDogs\Http\Requests;
use PamDogs\Http\Controllers\Controller;
use PamDogs\User;
use Auth;
use Carbon\Carbon;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the users in the database and return them
      $users = User::all();
      return $users;
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

        $exist = User::where('email',$request->email)->exists();

        if($exist) {
          return response()->json(['error' => 'El email ya está registrado.', 'user' => $exist],422);
        }

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Guarda E-Mail (1er paso de registro)
        /*$this->validate($request, [
            'email' => 'required|email|max:150',
            'pass'  => 'required|max:200'
        ]);*/

        /*$user = User::firstOrNew(['email' => $request->email]);
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
                return response()->json(['error' => 'Usuario registrado previamente, pero la contraseña es incorrecta.'], 422);
            }
        }*/

        return response()->json(['mensaje' => 'Registrado exitosamente.']);

        //Auth::loginUsingId($user->id);
        //return redirect()->route('registro.cliente');
    }

    public function storeCliente(Request $request)
    {
        //  (2do paso de registro)
        $user = Auth::user();
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|max:150|unique:users,email,'.$user->id,
            'nacimiento' => 'required|max:255',
            'genero' => 'required',
            'telefono' => 'required|digits_between:8,15|unique:users,telefono,'.$user->id,
            'dni_tipo' => 'required|max:255',
            'dni_nro' => 'required|digits_between:6,20|unique:users,dni_numero,'.$user->id,
        ]);

        if($request->file('avatar'))
        {
          $file = $request->file('avatar');
          $name = 'PamDogsAvatar_'.time().'.'.$file->getClientOriginalExtension();
          $path = public_path() . '/images/avatars/users';
          $file->move($path, $name);
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

        //$request->nacimiento = Carbon::createFromFormat('d/m/Y',$request->nacimiento)->toDateString();
        try
        {
            $new = User::find($user->id)
                    ->update([
                        'nombre' => $request->nombre,
                        'apellido' => $request->apellido,
                        'email' => $request->email,
                        'nacimiento' => $request->nacimiento,
                        'genero' => $request->genero,
                        'telefono' => $request->telefono,
                        'dni_tipo' => $request->dni_tipo,
                        'dni_numero' => $request->dni_nro,
                        'avatar' => $name,
                        ]);
        }
        catch(\Illuminate\Database\QueryException $e)
        {
            return response()->json(['Mensaje' => $e->getMessage()],422);
        }



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
