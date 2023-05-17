<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //A exepcion de estos campos los demas pueden ser asignados de forma masivas
    protected $guarded = ['id','created_at','updated_at'];

    //Relación de uno a muchos inversa (articles-user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion de Uno a Muchos (article-comments)
    public function comments(){
        return $this->hasMany(Comment::class );
    }

    //Relacion de Uno a Muchos inversa(Article-Categorie)
    public function category(){
        return $this->belongsTo(Category::class) ;
    }
}
