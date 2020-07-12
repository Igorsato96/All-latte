<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
   
    public function user()
    {
        return $this->belongsTo('App\User','id','id_user');
    }

    
    protected $fillable = [
        'id_user', 'name', 'cep', 'number', 'complement','state','city','address'
    ];
}
