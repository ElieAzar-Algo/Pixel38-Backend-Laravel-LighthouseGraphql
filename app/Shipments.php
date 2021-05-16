<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
