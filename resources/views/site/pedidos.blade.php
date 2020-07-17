@extends('layout')
<link rel="stylesheet" href="{{asset('assets/css/pedidos.css')}}">
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
    <h1>MEUS PEDIDOS</h1>
    @forelse($compras as $compra)
    <div id="grupo-corpo">
        <div class="corpo">
            <div class="conteudo">
                <div><i class="fas fa-shopping-bag"></i></div>      
                <div class="pedidos-conte">
                    <span>Pedido N {{$compra->id}}</span>
                    <!-- <div class="info-card">
                    <span><i class="far fa-credit-card"></i></span>
                    <span>Final 1253</span>
                    </div> -->
                </div>
                <div class="detalhes">
                    <div class="status">
                        <span>{{$compra->status}}</span>
                    </div>
                    <div class="det">
                    <span>Mais detalhes<i class="fas fa-chevron-down"></i></span>
                    <span>Menos detalhes<i class="fas fa-chevron-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="mais-detalhes">
            @php
                $total_pedido = 0;
                @endphp
                <div class="borda">
                    <span>PRODUTO</span>
                    <span>QTD</span>
                    <span>PREÇO TOTAL ITEM</span>
                </div>
                @foreach ($compra->pedido_produtos as $pedido_produto)
                <div class="prod-det">
                    <div class="itens">
                     <span>{{$pedido_produto->produto->name}}</span>
                     <span>{{ $pedido_produto->qtd}}</span>
                     @php
                            $total_produto = $pedido_produto->valores;
                            $total_pedido += $total_produto;
                        @endphp
                     <span>R$ {{ number_format($total_produto, 2, ',', '.') }}</span>
                 </div>
                </div>
                @endforeach
             <div class="total">
                 <span>TOTAL</span>
                 <span>R$ {{ number_format($total_pedido, 2, ',', '.') }}</span>
             </div>
            </div>
        </div>
    </div>
            @empty
                          <h5>Não há nenhum pedido</h5>
                      @endforelse
</div>
    </div>
    </div>
    <script src="{{asset('/assets/js/perfil.js')}}"></script>
    @endsection
@endsection