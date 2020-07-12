<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProdutos extends Model
{
    protected $fillable =[
        'pedidos_id','produto_id','status','prices'];
        
    public function produto()
    {
        return $this->belongsTo('App\Produtos','produto_id','id');
    }

}
