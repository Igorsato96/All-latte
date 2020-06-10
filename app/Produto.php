<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name','image','prices','qty','description'];

    public function categorias()
    {
        return $this->belongsToMany('App\Categorias');
    }
}
