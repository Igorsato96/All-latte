@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/cartao.css')}}">
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
    <h1>Meus Cartões</h1>
    <div id="grupo-corpo">
        <div class="corpo">
            <div class="conteudo">
                <div><i class="far fa-credit-card"></i></div>      
                <div class="card-conte">
                    <span>final 1253</span>
                </div>
                <div class="detalhes">
                    <div class="editar">
                        <a href="{{url('add-card')}}"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="det">
                    <span><i class="fas fa-chevron-down"></i></span>
                    <span><i class="fas fa-chevron-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="mais-detalhes">
             <div class="card-det">
                     <span>NOME TITULAR: </span><span>Teste</span><br><br>
                     <span>CPF: </span><span> 022-8555</span><br><br>
                     <span>NÚMERO DO CARTÃO: </span><span> 4335.8754.8666.7555</span>
             </div>
            </div>
        </div>
        <div class="corpo">
            <div class="conteudo">
                <div><i class="far fa-credit-card"></i></div>      
                <div class="card-conte">
                    <span>final 1253</span>
                </div>
                <div class="detalhes">
                    <div class="editar">
                        <a href=""><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="det">
                    <span><i class="fas fa-chevron-down"></i></span>
                    <span><i class="fas fa-chevron-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="mais-detalhes">
             <div class="card-det">
                     <span>NOME TITULAR: </span><span>Teste</span><br><br>
                     <span>CPF: </span><span> 022-8555</span><br><br>
                     <span>NÚMERO DO CARTÃO: </span><span> 4335.8754.8666.7555</span>
             </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{asset('/assets/js/perfil.js')}}"></script>
    @endsection
@endsection