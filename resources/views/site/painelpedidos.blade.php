<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Pedidos</title>
    <link rel="stylesheet" href="{{asset('assets/css/painelpedidos.css')}}">
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="area">
        <nav>
            <div id="menu-admin">
                <div id="logo">
                    <a href="{{url('')}}">
                        <img src="{{url('./assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div id="nav">
                    <div>
                        <a href="{{url('painelprodutos')}}"> <i class="fas fa-box"></i></a>
                    </div>
                    <div>
                        <a href="{{url('painelpedidos')}}"><i class="fas fa-shopping-bag"></i></a>
                    </div>
                    <div> 
                        <a href=""><i class="far fa-newspaper"></i></a>
                    </div>
                </div>
                <div>
                    <a href=""><i class="fas fa-power-off"></i></a>
                </div>
            </div>
        </nav>
        <div class="conteudo-pai">
            <div id="logo-pedido">
                <i class="fas fa-shopping-bag"></i>
                <span>PEDIDOS</span>
            </div>
            <div id="borda"></div>
            <div id="conteudo">
                <div id="tabela">
                    <div id="titulo-back">
                        <div id="titulo">
                            <span>PEDIDO</span>
                            <span>CLIENTE</span>
                            <span>VALOR TOTAL</span>
                            <span>STATUS</span>
                            <span>CRIAÇÃO</span>
                        </div>
            
                            @foreach($pedidos as $pedido)
                            <div id="tabela-detalhes">
                                <span>{{$pedido->id}}</span>
                                <span>{{$pedido->id_user}}</span>
                                @php
                                    $total_pedido = 0;
                                @endphp
                            @foreach ($pedido->pedido_produtos as $pedido_produto)
                                @php
                                    $total_produto = $pedido_produto->valores;
                                    $total_pedido += $total_produto;
                                @endphp
                            @endforeach 
                            <span>R${{ number_format($total_pedido, 2, ',', '.') }}</span>
                                <span>{{$pedido->status}}</span>
                                <span>{{$pedido->created_at}}</span>

                                <form method="POST" action="{{ route('admin.cancelar') }}">
                                    {{csrf_field()}}
                                <input type="hidden" name="pedido_id" value="{{$pedido->id}}">
                                <button type="submit"><i class="far fa-times-circle"></i></button>
                                </form>
                            </div>
                            @endforeach
                    </div>
                </div>
                <div id="detalhes">
                    <div id="detalhes-total">
                        <div id="total"><span>TOTAL</span></div>
                        <div class="pedidos-hoje">
                            <span id="sub-titulo">HOJE:</span>
                        </div>
                        <div class="pedidos">
                            <span class="total-produtos">{{$totalpedidoshoje}}</span>
                            <span class="pedi">PEDIDOS</span>
                        </div>
                        <div class="itens">
                            <span class="total-produtos">{{$totalprodutoshoje}}</span>
                            <span class="pedi">ITENS</span>
                        </div>
                        <div>
                            <div class="pedidos-hoje">
                                <span id="sub-titulo">ULTIMOS 30 DIAS</span>
                            </div>
                            <div class="pedidos">
                                <span class="total-produtos">{{$totalpedidosmes}}</span>
                                <span class="pedi">PEDIDOS</span>
                            </div>
                            <div class="itens">
                                <span class="total-produtos">{{$totalprodutosmes}}</span>
                                <span class="pedi">ITENS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>