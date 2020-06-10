@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/pedidos.css')}}">
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
                <h1>pedidos</h1>
            </div>
        </div>
        <div id="todos-conteudos">
            <div id="itens-pedidos">
                <h1>ITENS DO PEDIDO</h1>
                <div id="det-itens">
                    <div class="produto">
                        <div class="pi"><h4>PRODUTO</h4></div>
                        <div class="p"><h4>QTDE</h4></div>
                        <div class="p"><h4>PREÇO</h4></div>
                        <div class="p"><h4>TOTAL</h4></div>
                    </div>
                </div>
                <div class="borda"></div>
                <div class="prd">
                    <div class="prds">
                        <img src="./assets/img/menusimg/bebidas.png" alt="">
                        <span class="nome">CAPUCCINO</span>
                    </div>
                    <div class="qtd"><input type="number"></div>
                    <span class="preco">R$ 10,00</span>
                    <span class="preco-total">R$ 20,00</span>
                </div>
            </div>
            <div id="itens-total">
                <div id="total">
                    <h1>TOTAL</h1>
                    <div class="valor-itens">
                        <h4>ITENS PEDIDO</h4>
                        <h3>R$ 53,00</h4>
                    </div>
                    <div id="borda1"></div>
                </div>
                <button id="add">ADICIONAR PRODUTOS</button>
                <button id="ava">Avançar</button>
            </div>
        </div>
    </div>
    @endsection
@endsection