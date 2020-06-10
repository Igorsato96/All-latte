@extends('layout')

@section('title','Nosso Cafe')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @section('img')
    <div class="imgbanner"><img src="./assets/img/menusimg/bebidas.png" alt="">
</div>
@endsection
@section('background')
<div class="popup-bebidas">
<div class="bebidas">
        @section('conteudo')
        @foreach($categories as $categoria) 
            <div class="titulo-bebidas">{{$categoria->name}}</div>
        @endforeach  
          
            <div class="qtd-produtos">
                <div class="quantidade">{{$total}} produtos </div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Ordenar por<div class="droplogo"><i class="fas fa-chevron-down"></i></div></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
            <section>
                <div class="product-cardp">
                    @foreach($products as $product)  
                <div class="product-card">
                <div class="text-random">
                         <h1>{{$product->name}}</h1>
                    </div>
                    <div class="product-pic"><img src="{{$product->image}}"></div>
                    <div class="product-colors">
                    </div>
                    <div class="product-info">
                        <div class="product-price">R${{$product->prices}}</div>
                        <div class="botao">
                            <div id="adicionar">
                                <div class="product-button adicionar">adicionar</div>
                            </div>
                            <div id="saiba-mais">
                                    <a href="#{{$product->id}}" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup" id="{{$product->id}}">
                                    <div class="popup-inner">
                                        <div class="popup-photo">
                                            <img src="{{$product->image}}">
                                        </div>
                                        <div class="popup-text">
                                            <h1>{{$product->name}}</h1>
                                            <p>{{$product->description}}</p>
                                            <a class="close" href="">×</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
                @endforeach        
            </section>
        @endsection
@endsection