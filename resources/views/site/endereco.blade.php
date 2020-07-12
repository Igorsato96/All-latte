@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/endereco.css')}}">
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
    <h1>MEUS ENDEREÇOS</h1>
    @foreach($enderecos as $endereco)
    <div id="grupo-corpo">
        <div class="corpo">
            <div class="conteudo">
                <div><i class="fas fa-map-marked-alt"></i></div>      
                <div class="card-conte">
                    <span>{{$endereco->name}}</span>
                </div>
                <div class="detalhes">
                    <div class="editar">
                        <a href="{{url("add-endereco/$endereco->id/edit")}}"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="det">
                    <span><i class="fas fa-chevron-down"></i></span>
                    <span><i class="fas fa-chevron-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="mais-detalhes">
             <div class="endereco-det">
                 <div class="local">
                     <div class="estado">
                     <span>Estado: </span><span>{{$endereco->state}}</span>
                     </div>
                     <div class="cidade">
                         <span>Cidade: </span><span>{{$endereco->city}}</span><br><br>
                     </div>
                 </div>
                 <div class="cep-num flex">
                     <div class="cep">
                         <span>Cep: </span><span> {{$endereco->cep}}</span>
                     </div>
                     <div class="num">
                         <span>NÚMERO DA CASA: </span><span>{{$endereco->number}}</span>
                     </div>
                 </div>
                 <div class="complemento">
                 <span>COMPLEMENTO: </span><span>{{$endereco->complement}}</span>
                 </div>
             </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="novo">
    <i class="fas fa-plus-circle"></i><a href="{{url('add-endereco')}}">NOVO ENDEREÇO</a>
    </div>
    </div>
</div>
    </div>
    <script src="{{asset('/assets/js/perfil.js')}}"></script>
    @endsection
@endsection