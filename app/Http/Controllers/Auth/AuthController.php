<?php

namespace PamDogs\Http\Controllers\Auth;

use PamDogs\User;
use Validator;
use PamDogs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Auth;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    protected $redirectPath = '/';

    protected $loginPath = '/login';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function getLogin()
    {
        return view('main.iniciar-sesion');
    }

    public function postLogin(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'E-Mail o contraseña invalidos'],422);
        }
        return response()->json();
    }



    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {

        try {
            $user = Socialite::driver('facebook')->fields([
                      'name',
                      'first_name',
                      'last_name',
                      'email',
                      'gender',
                      'verified'
                  ])->user();
        } catch (Exception $e) {

            return redirect('dev/facebook');
        }

        $authUser = $this->findOrCreateUser($user);

        /*try {
            dd(Auth::login($authUser, true));
        } catch (Exception $e) {
            dd($e);
        }*/

        /*try {
            print $authUser->id;
            dd(Auth::loginUsingId($authUser->id));
        } catch (Exception $e) {
            dd($e);
        }*/
        Auth::login($authUser);
        if($request->header('referer') == route('login')){
          return redirect('/#');
        } else {
          return redirect('registro/cliente#');
        }



        /*Auth::login($authUser);
        return redirect('registro/cliente#');*/
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_id', $facebookUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            'nombre' => $facebookUser->user['first_name'],
            'apellido' => $facebookUser->user['last_name'],
            'email' => $facebookUser->email,
            'facebook_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar
        ]);
    }

}
