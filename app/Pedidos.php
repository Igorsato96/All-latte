<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable =[
        'id_user','status'];

        public function pedido_produtos()
        {
            return $this->hasMany('App\PedidoProdutos')
            ->select(\DB::raw('produto_id, sum(prices) as valores, count(1) as qtd'))
            ->groupBy('produto_id')
            ->orderBy('produto_id','asc');
         
        }
    public static function consultaId($where)
    {
        $pedido = self::where($where)->first(['id']);
        return !empty($pedido->id)? $pedido->id:null;
    }

    public function user()
    {
        return $this->hasMany('App\User','id','id_user');
    }

}
