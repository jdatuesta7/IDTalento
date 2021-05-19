<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use App\SocialProfile;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Red social actual authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from Red social actual.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request, $driver)
    {
        if ($request->get('error')) {
            return redirect()->route('login');
        }

        $userSocialite = Socialite::driver($driver)->stateless()->user();

        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
            ->where('social_name', $driver)->first();


        if (!$social_profile) {

            $user = User::where('email', $userSocialite->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email' => $userSocialite->getEmail(),
                ]);
            }
            
            $social_profile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $driver,
                'social_avatar' => $userSocialite->getAvatar(),
            ]);
            
        }
        //d($social_profile->getUser);
        auth()->login($social_profile->getUser);

        // $cadena = $user->name;
        // $separator = " ";
        // $separada = explode($separator, $cadena);
        // $firstName = $separada[0];
        //dd($firstName);

        return view('home', compact('social_profile'));
    }

    public function showLoginFormBusiness(){
        return view('auth.business.login');
    }
}
