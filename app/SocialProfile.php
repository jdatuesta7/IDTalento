<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    //Relacion uno a muchos inversa
    public function users(){
        $this->belongsTo(User::class);
    }
}
