<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginApiController extends Controller
{

    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        try{
            $user = Socialite::driver($provider)->stateless()->user();
        }catch(Exception $e){
            return redirect()->back();
        }

        $authUser = $this->findOrCreateUser($user,$provider);

        return redirect('/');
    }

    public function findOrCreateUser($socialUser, $provider){
        $socialAccount = User::where('social_id', $socialUser->getId())
        ->where('social_type', $provider)
        ->first();

        if($socialAccount){
            Auth()->login($socialAccount, true);
        }else{
            $user = User::where('email', $socialUser->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' => $socialUser->getName(),
                    'social_id' => $socialUser->getId(),
                    'social_type'=> $provider
                ]);
            }
            event(new Registered($user));

            Auth::login($user);

            return $user;

        }
    }
}
