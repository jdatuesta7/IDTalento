<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{

    //asignacion masiva
    protected $fillable = ['user_id','social_id','social_name','social_avatar'];

    //Relacion uno a muchos inversa
    public function users(){
        $this->belongsTo(User::class);
    }
}
