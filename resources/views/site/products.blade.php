@extends('layout')
@foreach($categories as $categoria) 
<title>{{$categoria->name}}</title>
@endforeach  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @section('img')
    @foreach($categories as $categoria) 
    <div class="imgbanner"><img src=".{{$categoria->imgbanner}}" alt="">
    @endforeach  
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
                <div class="quantidade">{{$total}} produtos</div>
              
            </div>
            <section>
                <div class="product-cardp">
                    @forelse($category_products as $product)  
                <div class="product-card">
                <div class="text-random">
                         <h1>{{$product->name}}</h1>
                    </div>
                    <div class="product-pic"><img src="{{ url("storage/{$product->image}") }}"></div>
                    <div class="product-colors">
                    </div>
                    <div class="product-info">
                        <div class="product-price">R${{ number_format($product->prices, 2, ',', '.') }} </div>
                        <div class="botao">
                            <div id="adicionar">
                            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                              {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                              <button class="product-button adicionar" data-position="bottom" data-delay="50" data-tooltip="O produto será adicionado ao seu carrinho">adicionar</button>   
                         </form>         
                            </div>
                            <div id="saiba-mais">
                                    <a href="#{{$product->id}}" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup" id="{{$product->id}}">
                                    <div class="popup-inner">
                                        <div class="popup-photo">
                                        <img src="{{ url("storage/{$product->image}")}}">
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