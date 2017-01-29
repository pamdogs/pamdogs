<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 use Laravel\Socialite\Contracts\Factory as Socialite;

class FacebookAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return \Socialite::with('facebook')->redirect();
        return Socialite::driver('facebook')->redirect();
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
    public function show()
    {
        /*$user = \Socialite::with('facebook')->user();

        //now we have user details in the $user array
        echo '<div
          class="fb-like"
          data-share="true"
          data-width="450"
          data-show-faces="true">
        </div>';
        dd($user);*/

        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('dev/facebook');
        }

        //$authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        dd($user);
        //return redirect()->route('home');
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
