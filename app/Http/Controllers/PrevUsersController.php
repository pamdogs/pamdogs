<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PrevUser;

class PrevUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Este codigo deberia estar en el metodo create(), pero por coveniencia de URI se dejara aqui.
        return view('form-registration.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => 'required|max:255',
            'email' => 'required|unique:prev_users|max:255',
            'city' => 'required|max:255',
            'place' => 'required|max:255',
            'phone' => 'numeric',
            'desc' => 'required|max:255',
        ]);
        
        $user = new PrevUser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->place = $request->place;
        $user->phone = $request->phone;
        $user->description = $request->desc;
        $user->save();
        //return back()->with('status', '¡Gracias por registrarte!');


        return response()->json(['status' => 'success',
            'msg' => 'Gracias por registrarse.']);

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

    public function listar()
    {
        $interesados = PrevUser::paginate(20);
       

        return view('form-registration.list', ['interesados' => $interesados]);
    }
}
