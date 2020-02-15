<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Laravel\Socialite\Facades\Socialite;
use App\User;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo,$provider);
        auth()->login($user);
        return redirect()->to('/welcome');
    }
    function createUser($getInfo,$provider){
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'facebook_id'     => $getInfo->id,
                'name'     => $getInfo->name,
                'nickname'     => $getInfo->nickname??null,
                'email'    => $getInfo->email,
                'avatar'    => $getInfo->avatar??null,
                'avatar_original'    => $getInfo->avatar_original??null,
                'profileUrl'    => $getInfo->profileUrl??null,
                'expiresIn'    => $getInfo->expiresIn??null,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
