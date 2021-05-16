<?php 



namespace App\GraphQL\Mutations;


use App\User;

class UserMutator
{
    public function create($root, array $args)
    {
        $oldUsers=User::all();
        foreach($oldUsers as $user){
            $user->api_token=null;
            $user->save();
        }
        return \App\User::create($args);
    }
}



