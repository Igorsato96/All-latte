@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/carrinho.css')}}">
@section('title','Pedidos')
@section('background')
<div class="background">
    @section('conteudo')
    <div id="pedidos">
        <div id="backmenu">
            <div class="logocliente">
                <div class="imglogo">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h1>Carrinho</h1>
            </div>
        </div>
        <div id="todos-conteudos">
            <div id="itens-pedidos">
                <h1>ITENS DO CARRINHO</h1>
                <div id="det-itens">
                    @forelse ($pedidos as $pedido)
                    <div class="produto">
                        <div class="pi"><h4>PRODUTO</h4></div>
                        <div class="p"><h4>QTDE</h4></div>
                        <div class="p"><h4>PREÇO</h4></div>
                        <div class="p"><h4>TOTAL</h4></div>
                    </div>
                </div>
                <div class="borda"></div>
                @php
                $total_pedido = 0;
                @endphp
                @foreach ($pedido->pedido_produtos as $pedido_produto)
                    <div class="prd">
                    <div class="prds">
                        <img src="{{ url("storage/{$pedido_produto->produto->image}") }}" alt="">
                        <span class="nome">{{ $pedido_produto->produto->name}}</span>
                    </div>
                    <div class="qtd">
                         <a  href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )">
                            <i class="fas fa-minus-circle"></i>
                                </a>
                        <span class="qtd-produto">{{ $pedido_produto->qtd}}</span>
                        <a  href="#" onclick="carrinhoAdicionarProduto({{$pedido_produto->produto_id}})">
                            <i class="fas fa-plus-circle"></i>
                                </a>
                    </div>
                    <span class="preco">R$ {{ number_format($pedido_produto->produto->prices, 2, ',', '.') }}</span>
                    @php
                            $total_produto = $pedido_produto->valores;
                            $total_pedido += $total_produto;
                        @endphp
                    <span class="preco-total">R$ {{ number_format($total_produto, 2, ',', '.') }} </span>
                </div>
                @endforeach
            </div>
            <div id="itens-total">
                <div id="total">
                    <h1>TOTAL</h1>
                    <div class="valor-itens">
                        <h4>ITENS PEDIDO</h4>
                        <h3>R${{ number_format($total_pedido, 2, ',', '.') }} </h3>
                    </div>
                    <div id="borda1"></div>
                </div>
                <button id="add"><a href="{{url('cardapio')}}">ADICIONAR PRODUTOS</a></button>
                <form method="POST" action="{{ route('carrinho.concluir') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="pedidos_id" value="{{ $pedido->id }}">  
                    <button id="ava" type="submit">Concluir</button>
                </form>
                @empty
                      <h5>Não há nenhum pedido no carrinho</h5>
                  @endforelse
            </div>
        </div>
    </div>
    <form id="form-remover-produto" method="POST" action="{{ route('carrinho.remover') }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="pedidos_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="{{ route('carrinho.adicionar') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('/assets/js/carrinho.js')}}"></script>
    @endsection
@endsection