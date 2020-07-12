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
        @foreach($categories as $category)
        <div class="box">
            <a href="{{url('products',$category->id)}}"><img src="{{$category->image}}"></a>
            <span>{{$category->name}}</span>
        </div>
        @endforeach

    @endsection
    @endsection
    