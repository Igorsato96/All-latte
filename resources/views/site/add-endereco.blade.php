@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/add-endereco.css')}}">
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
    <h1>@if(isset($endereco)) Editar Endereços @else Cadastrar Endereços @endif </h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alerta">
                <span>{{$error}}</span>
            </div>
        @endforeach
    @endif
    <div id="grupo-corpo">
        <div class="corpo">
            <div class="conteudo">
            @if(isset($endereco))  
                <form  method="POST" action="{{ url("add-endereco/$endereco->id") }}">
                @method('PUT')
             @else
                <form  method="POST" action="{{ url('add-endereco') }}">
                @endif
                @csrf
                <div class="novo-end"><i class="fas fa-map-marked-alt"></i>    
                <div class="card-conte">
                <label class="form-control-label" for="name"></label>
                <input type="text" id="name"  name="name"  value="{{$endereco->name ?? ''}}" placeholder=" DIGITE NOME DO NOVO ENDEREÇO">
                </div>
                </div>  
            </div>
    <div id="form1">
        <div class="form-grup">
        <label for="state">Estado</label>
            <select name="uf" required="required">
                <option value=""></option>
            </select>
            <input type="hidden" name="state">
        </div>
    <div class="form-grup">
        <label for="city">Cidade</label>
        <select name="city" disabled="disabled" required="required">
            <option value=""></option>
        </select>
    </div>
    </div>
    <div id="form2">
        <div class="cep">
            <label class="form-control-label" for="cep">CEP</label>
            <input  type="text" id="cep"  name="cep"  value="{{$endereco->cep ?? ''}}">
        </div>
        <div class="rua-num">
            <div class="rua">
               <label class="form-control-label" for="address">rua</label>
               <input type="text" id="address"  name="address"  value="{{$endereco->address ?? ''}}">
           </div>
            <div class="num">
                <label class="form-control-label" for="number">numero</label>
                <input type="text" id="number"  name="number"  value="{{$endereco->number ?? ''}}">
            </div>
        </div>
    </div>    
        <div id="form3">
            <div class="complemento">
                    <label class="form-control-label" for="complement">Complemento</label>
                    <input type="text" id="complement"  name="complement"  value="{{$endereco->complement ?? ''}}">
            </div>
        </div>    
        <div id="botoes">
        <button id="cancelar">CANCELAR</button>
        <button id="salvar" type="submit" value="@if(isset($endereco)) Editar Endereços @else Cadastrar Endereços @endif ">SALVAR</button>
        </div>
    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="{{asset('/assets/js/add-endereco.js')}}"></script>
    @endsection
@endsection