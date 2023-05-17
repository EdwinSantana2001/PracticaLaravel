<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //A exepcion de estos campos los demas pueden ser asignados de forma masivas
    protected $guarded = ['id','created_at','updated_at'];

    //Relación de UnoaUno inversa(profile-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación de de Uno a Muchos (users-aricle)
    public function atricles(){
        return $this->hasMany(Articles::class) ;
    }
}
