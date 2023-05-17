<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //A exepcion de estos campos los demas pueden ser asignados de forma masivas
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion de Uno a muchos inversa (user-comments)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion de uno a Muchos inversa (comments-Article)
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
