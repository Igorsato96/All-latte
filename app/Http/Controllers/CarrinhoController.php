<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    function __construct()
    {
        //Obrigado estar logado;
        $this->middleware('auth');
        
    }
    public function index()
    {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();
        return view('/site/pedidos',compact('pedidos'));
    }
}
