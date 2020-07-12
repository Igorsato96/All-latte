<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['name','image','prices','qty','description','id_category','ativo'];

    public function categorias()
    {
        return $this->belongsToMany('App\Categorias');
    }
}
