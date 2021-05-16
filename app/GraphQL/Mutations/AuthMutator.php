<?php 

namespace App\GraphQL\Mutations;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthMutator
{
    public function login($root, array $args)

    {
     
        $oldUsers=User::all();
        foreach($oldUsers as $user){
            $user->api_token=null;
            $user->save();
        }

    
        $credentials = Arr::only($args, ['email','password']);

        if(Auth::once($credentials)) 
        {
            $token=Str::random(60);
 
            $user=auth()->user();
            // $user->api_token=$token=null;
            $user->api_token=$token;
            $user->save();

            return $token;
        

        }
    
        return null;
    }

}



