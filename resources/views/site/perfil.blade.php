@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/perfil.css')}}">
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
    <div id="formu">
    <h1>Perfil</h1>
    <form method="POST" action="{{ route('perfil.update') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">
    <div id="form1">
        <div class="form-grup">
    <label class="form-control-label" for="name">Name Completo</label>
    <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', auth()->user()->name) }}">
        </div>
        <div class="form-grup">
        <label class="form-control-label" for="telefone">TELEFONE</label>
        <input type="tel" id="telefone" class="form-control" name="telefone" placeholder="" value="{{ old('telefone', Auth::user()->telefone) }}" >
        </div>
    </div>
    <div id="form2">
        <div class="form-grup">
    <label class="form-control-label" for="email">EMAIL</label>
    <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}">
        </div>
        <div class="form-grup">
        <label class="form-control-label" for="password">SENHA</label>
        <input type="password" id="password"  name="password"  value="{{ old('password', Auth::user()->password) }}">
        </div>
    </div>
        <div id="botoes">
      <button id="cancelar" type="submit"><a href="{{url('menuprofile')}}">CANCELAR</a></button>
        <button id="salvar" type="submit">SALVAR</button>
        </div>
    </form>
    </div>
    </div>
    </div>
   
    @endsection
@endsection