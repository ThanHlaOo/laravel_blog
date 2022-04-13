<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Auth;
class FbController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        try {
    
            $user = Socialite::driver('facebook')->stateless()->user();
            $facebookId = User::where('facebook_id', $user->id)->first();
            // $newName = $user->avatar;
            if($facebookId){
                Auth::login($facebookId);
                return redirect()->route('home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('john123'),
                    'photo' => $user->avatar,
                ]);
                // $file->storeAs("mine",$newName);
                Auth::login($createUser);
                return redirect()->route('home');
            }
       
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

}
