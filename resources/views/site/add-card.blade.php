@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/add-card.css')}}">
@section('title','Menu Perfil')
@section('background')
    <div class="background">
@section('conteudo')
    <div id="menu">
    <div id="backmenu">
            <div class="logocliente">
                <div class="imglogo">
                <h2> {{ Auth::user()->name[0] }}</h2>
                </div>
                <h1>{{ auth()->user()->name }}</h1>
            </div>
        </div>
        <div id="menu-pai">
        <div id="menus-options">
            <div id="perfil"><a href="{{url('perfil')}}"><i class="fas fa-user"></i>
            <span>Perfil</span></a>
        </div>
        <div id="pedidos"><a href="{{url('pedidos')}}"><i class="fas fa-shopping-bag"></i>
        <span>Meus pedidos</span></a>
    </div>
    <div id="card"><a href="{{url('cartao')}}"><i class="far fa-credit-card"></i>
    <span>Meus Cartões</span></a>
</div>
    <div id="endereco"><a href="{{url('endereco')}}"><i class="fas fa-map-marked-alt"></i>
        <span>Meus endereços</span></a>
    </div>
    </div>
    <div id="list">
    <h1>Novo Cartão</h1>
    <div id="grupo-corpo">
        <div class="corpo">
            <div class="conteudo">
                <div><i class="far fa-credit-card"></i></div>      
                <div class="card-conte">
                    <span>Novo Cartão</span>
                </div>
            </div>
            <form action="">
    <div id="form1">
        <div class="form-grup">
    <label class="form-control-label" for="name">NOME TITULAR</label>
        <input type="text" id="name"  name="name"  value="">
        </div>
        <div class="form-grup">
        <label class="form-control-label" for="telefone">CPF</label>
        <input type="tel" id="telefone"  name="telefone"  value="">
        </div>
    </div>
    <div id="form2">
        <div class="form-grup">
    <label class="form-control-label" for="email">NUMERO DO CARTÃO</label>
        <input type="email" id="email"  name="email"  value="">
        </div>
    </div>
        <div id="botoes">
        <button id="cancelar">CANCELAR</button>
        <button id="salvar">SALVAR</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{asset('/assets/js/perfil.js')}}"></script>
    @endsection
@endsection