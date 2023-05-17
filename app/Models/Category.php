<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //A exepcion de estos campos los demas pueden ser asignados de forma masivas
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion de uno a muchos (article-category)
    public function article(){
        return $this->hasMany(Article::class);
    }
}
