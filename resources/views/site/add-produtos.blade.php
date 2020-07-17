<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
    <link rel="stylesheet" href="{{asset('assets/css/add-produtos.css')}}">
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="logo-prod">
    <i class="fas fa-box"></i>
    <span>Produtos</span>
    </div>
    <div id="borda1"></div>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alerta">
                <span>{{$error}}</span>
            </div>
        @endforeach
    @endif
    <div id="fundo">
        <div id="adicionar">
            <span>@if(isset($produtos)) Editar Produtos @else Cadastrar Produtos @endif</span>
        </div>
        @if(isset($produtos))  
                <form  method="POST" enctype="multipart/form-data" action="{{ url("add-produtos/$produtos->id") }}" >
                @method('PUT')
             @else
             <form  method="POST" action="{{ url('add-produtos') }}" enctype="multipart/form-data">
                @endif
                @csrf
        <div id="formulario">
            <div id="imagem">
                <img id="output">
                <input type="file" accept="image/*" onchange="loadFile(event)" name="image" >
            </div>
            <div id="form-preencher">
                <div id="part1">
                    <div id="nome">
                        <label for="name">Nome do Produto</label>
                        <input type="text" name="name" id="name"  value="{{$produtos->name ?? ''}}">
                    </div>
                    <div id="categoria">
                        <label for="category">CATEGORIA</label>
                        <select name="id_category" id="id_category">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div id="quantidade">
                        <label for="qtd">QUANTIDADE</label>
                        <input type="text" name="qty" id="qty" value="{{$produtos->qty ?? ''}}">
                    </div>
                    <div id="preco">
                        <label for="prices">PREÇO</label>
                        <input type="text" name="prices" id="prices" value="{{$produtos->prices ?? ''}}">
                    </div>
                    <div id="status">
                        <label for="ativo">ATIVO</label>
                        <select name="ativo" id="ativo">
                            <option value="S">S</option>
                            <option value="N">N</option>
                            </select>
                    </div>
                </div>
                <div id="part2">
                    <div id="desc">
                            <label for="descricao">DESCRIÇÃO</label>
                            <textarea name="description" id="description" value="">{{$produtos->description ?? ''}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div id="botoes">
            <div id="salvar">
                <button type="submit" value="@if(isset($produtos)) Editar Produtos @else Cadastrar Produtos @endif ">ADICIONAR</button>
            </div>
            <div id="cancelar">
                <button><a href="{{ url('painelprodutos') }}">CANCELAR</a></button>
            </div>
        </div>
        </form>
    </div>
    <script type="text/javascript" src="{{asset('/assets/js/add-produtos.js')}}"></script>
</body>
</html>


