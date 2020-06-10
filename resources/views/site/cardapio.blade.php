@extends('layout')

@section('title','Cardápio')
    @section('img')
    <div class="cardapio"><img src="./assets/img/menusimg/categorias.png" alt=""></div>
    @endsection
    @section('background')
    <div class="marron">
        @section('conteudo')
        <div class="titulo cardapio">Que tal uma pausa?</div>
        <div class="cardapio-sub">Escolha seus favoritos</div>
    <div class="card-cat">
        <div class="box">
            <a href="./salgados"><img src="./assets/img/cardapio/salgados.png"></a>
            <span>Salgados</span>
        </div>
        <div class="box">
           <a href="./bebidas"><img src="./assets/img/cardapio/bebidas.png"></a> 
            <span>Bebidas</span>
        </div>
        <div class="box">
            <a href="./sobremesas"><img src="./assets/img/cardapio/sobremesas.png"></a>
            <span>Sobremesas</span>
        </div>
        <div class="box">
            <a href="./nossocafe"><img src="./assets/img/cardapio/nossocafe.png"></a>
            <span>Nosso café</span>
        </div>
    </div>

    @endsection
    @endsection
    