<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Produtos</title>
    <link rel="stylesheet" href="{{asset('assets/css/painelProdutos.css')}}">
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
            <div id="logo-prod">
            <i class="fas fa-box"></i>
            <span>PRODUTOS</span>
            </div>
            <div id="borda1"></div>
            <div id="total">
                <div id="conteudo">
                    <div id="produtos">
                    <span>PRODUTOS</span>
                        <div class="detalhes">
                            <div class="cadastrados">
                                <div class="quantidade">{{$total}}</div>
                                <div class="descricao">CADASTRADOS</div>
                            </div>
                            <div class="status">
                                <div class="ativo">
                                    <div class="qtd">{{$totalAtivos}}</div>
                                    <div class="sts">ATIVOS</div>
                                </div>
                                <div class="inativo">
                                    <div class="qtd">{{$totalInativos}}</div>
                                    <div class="sts">INATIVOS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="categorias">
                    <span>CATEGORIAS</span>
                        <div class="detalhes">
                            <div class="cadastrados">
                                <div class="quantidade">{{$totalCategorias}}</div>
                                <div class="descricao">CADASTRADOS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="listagem">
                <span>LISTAGEM</span>
            </div>
            <div class="botoes">
                <div id="add-produtos">
                    <div id="add">
                    <i class="far fa-plus-square"></i>
                        <span><a href="{{url('add-produtos')}}"> ADICIONAR NOVO PRODUTO</a></span>
                    </div>
                </div>
                <div id="cardapio">
                   <a href="{{url('cardapio')}}"> VISUALIZAR NO CARDAPIO</a>  
                </div>
            </div>
            <div class="tabela">
                <div id="tabela-titulo">
                    <span>COD.</span>
                    <span>DESCRIÇÃO</span>
                    <span>CATEGORIA</span>
                    <span>QTDE</span>
                    <span>PREÇO</span>
                    <span>ATIVO</span>
                </div>
                @foreach ($produtos as $produto)
                    <div id="tabela-produtos">
                    <p>{{$produto->id}}</p>
                    <p>{{$produto->name}}</p>
                    <p>{{$produto->id_category}}</p>
                    <p>{{$produto->qty}}</p>
                    <p>R${{$produto->prices}}</p>
                    <p>{{$produto->ativo}}</p>
                    <a href="{{url("add-produtos/$produto->id/edit")}}"><i class="fas fa-edit"></i></a>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</body>
</html>