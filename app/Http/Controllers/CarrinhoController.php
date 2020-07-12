<?php

namespace App\Http\Controllers;

use App\PedidoProdutos;
use App\Pedidos;
use App\Produtos;
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
        $pedidos = Pedidos::where([
            'status' => 'RE',
            'id_user' => Auth::id(),
        ])->get();
        return view('/site/carrinho',compact('pedidos'));
    }
    public function adicionar()
    {

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idproduto = $req->input('id');

        $produto = Produtos::find($idproduto);
        if( empty($produto->id) ) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado em nossa loja!');
            return redirect()->route('carrinho.index');
        }

        $idusuario = Auth::id();

        $idpedido = Pedidos::consultaId([
            'id_user' => $idusuario,
            'status'  => 'RE' // Reservada
            ]);

        if( empty($idpedido) ) {
            $pedido_novo = Pedidos::create([
                'id_user' => $idusuario,
                'status'  => 'RE'
                ]);

            $idpedido = $pedido_novo->id;

        }

       PedidoProdutos::create([
            'pedidos_id'  => $idpedido,
            'produto_id' => $idproduto,
            'prices'      => $produto->prices,
            'status'     => 'RE'
            ]);

        $req->session()->flash('mensagem-sucesso', 'Produto adicionado ao carrinho com sucesso!');

        return redirect()->route('carrinho.index');

    }

    public function remover()
    {

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido           = $req->input('pedidos_id');
        $idproduto          = $req->input('produto_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario          = Auth::id();

        $idpedido = Pedidos::consultaId([
            'id'      => $idpedido,
            'id_user' => $idusuario,
            'status'  => 'RE' // Reservada
            ]);

        if( empty($idpedido) ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $where_produto = [
            'pedidos_id'  => $idpedido,
            'produto_id' => $idproduto
        ];

        $produto = PedidoProdutos::where($where_produto)->orderBy('id', 'desc')->first();
        if( empty($produto->id) ) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
            return redirect()->route('carrinho.index');
        }

        if( $remove_apenas_item ) {
            $where_produto['id'] = $produto->id;
        }
        PedidoProdutos::where($where_produto)->delete();

        $check_pedido = PedidoProdutos::where([
            'pedidos_id' => $produto->pedidos_id
            ])->exists();

        if( !$check_pedido ) {
            Pedidos::where([
                'id' => $produto->pedidos_id
                ])->delete();
        }

        $req->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');

        return redirect()->route('carrinho.index');
    }

    public function concluir()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido  = $req->input('pedidos_id');
        $idusuario = Auth::id();

        $check_pedido = Pedidos::where([
            'id'      => $idpedido,
            'id_user' => $idusuario,
            'status'  => 'RE' // Reservada
            ])->exists();

        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        }

        $check_produtos = PedidoProdutos::where([
            'pedidos_id' => $idpedido
            ])->exists();
        if(!$check_produtos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.index');
        }

        PedidoProdutos::where([
            'pedidos_id' => $idpedido
            ])->update([
                'status' => 'PA'
            ]);
        Pedidos::where([
                'id' => $idpedido
            ])->update([
                'status' => 'PA'
            ]);

        $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');

        return redirect()->route('carrinho.compras');
    }

    public function compras()
    {

        $compras = Pedidos::where([
            'status'  => 'PA',
            'id_user' => Auth::id()
            ])->orderBy('created_at', 'desc')->get();

        $cancelados = Pedidos::where([
            'status'  => 'CA',
            'id_user' => Auth::id()
            ])->orderBy('updated_at', 'desc')->get();

        return view('/site/pedidos', compact('compras', 'cancelados'));

    }
}
