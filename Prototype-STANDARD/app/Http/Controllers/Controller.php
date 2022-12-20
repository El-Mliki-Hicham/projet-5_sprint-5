<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function  redirect(){
        return Socialite::driver('google')->redirect();

    }

    function callbackGoogle(){
        try {
            $google_user = Socialite::driver("google")->user();
            // dd($google_user);
            $user= User::where('google_id',$google_user->getId())->first();

            if(! $user){

            $Add_user=User::create([
                "name"=>$google_user->getName(),
                "email"=>$google_user->getEmail(),
                "google_id"=>$google_user->getId(),
            ]);

            Auth::login ($Add_user);
                return redirect()->intended('task');
            }
            else{
                Auth::login($user);
                return redirect()->intended('task');

            }


        } catch (\Throwable $th) {
            //throw $th;
            dd('eruur'.$th->getMessage());
        }
    }

}
