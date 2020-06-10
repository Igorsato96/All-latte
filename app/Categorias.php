<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = ['name'];

    public function produtos()
    {
        return $this->belongsToMany('App\Produto');
    }
}
