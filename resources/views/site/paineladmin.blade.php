<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/paineladmin.css')}}">
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="logo"><img src="{{asset('assets/img/logo.png')}}" alt="">
            <span>BEM-VINDO!</span>
            <div id="home"><a href="{{url('')}}"><i class="fas fa-home"><span>VISITAR E-COMMERCE</span></i></a></div>
            <div id="logout"><a href="{{url('logout')}}"><span>SAIR</span><i class="fas fa-power-off"></i></a></div>
        </div>
    </header>
    <main>
        <div id="conteudo">
            <div id="opcoes">
                <h1>Por onde vamos começar?</h1>
                <div id="menu">   
                    <div id="produtos"><a href="{{url('painelprodutos')}}"><i class="fas fa-box"></i><span>PRODUTOS</span></a></div>
                    <div id="pedidos"><i class="fas fa-shopping-bag"></i><span>PEDIDOS</span></div>
                    <div id="novidades"><i class="far fa-newspaper"></i><span>NOVIDADES</span></div>
                </div>
            </div>
            <div id="visao">
                <div id="titulo"><span>VISÃO RÁPIDA</span></div>
                <div id="vendas"><span>VENDAS NOS ÚLTIMOS 30 DIAS</span></div>
                <div id="pedidostotal">
                    <span class="total">{{$totalpedidos}}</span>
                    <span class="item">PEDIDOS</span>
                </div>
                <div id="itenstotal">
                    <span class="total">{{$totalitens}}</span>
                    <span class="item">ITENS</span>
                </div>
                <div id="borda"></div>
                <div id="sub-titulo">
                    <span>DETALHES DOS PEDIDOS</span>
                </div>
                <div id="detalhes">
                    <div id="concluidos">
                        <span class="qtd">{{$totalpagos}}</span>
                        <span class="status">CONCLUIDOS</span>
                    </div>
                    <div id="reservados">
                        <span class="qtd">{{$totalreservados}}</span>
                        <span class="status">RESERVADOS</span>
                    </div>
                    <div id="cancelados">
                        <span class="qtd">{{$totalcancelados}}</span>
                        <span class="status">CANCELADOS</span>
                    </div>
                   
                </div>
            </div>
        </div>
    </main>
</body>
</html>