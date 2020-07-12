@extends('layout')
@section('title','Caffe Al Latte')
        @section('img')
        <div class="carrosel-principal">
            <div class="slide-principal">
                <div class="slidershow">
                    <div class="slides">
                        <div class="slide s1">
                            <img src="./assets/img/banner/Background1.png" alt="">
                        </div>
                        <div class="slide ">
                            <img src="./assets/img/banner/background2.png" alt="">
                        </div>
                        <div class="slide ">
                            <img src="./assets/img/banner/background3.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="./assets/img/banner/background4.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/Background5.png" alt="">
                        </div>
                    </div>
                        <div class="bem">
                            <div class="bem-vindo">Bem vindo </div>
                             <div class="al-latte"><span>AO</span> CAFFÈ AL LATTE</div>
                        </div>
                </div>
            </div>
        </div>
        @endsection
    @section('conteudo')
        <div class="historia-filho index">
            <div class="imagem-pqcomeco"><img src="./assets/img/indeximg/Capa sobre nos.png" alt=""></div>
            <div class="titulo-sub">
                <div class="titulo">O inicio de um sonho ... </div>
                <div class="sub-titulo-sec"> CAFE AL LATTE</div>
                <div class="conteudo-index"> Começamos em uma pequena cafeteria, localizada no sul da cidade de São Paulo, com um sonho, proporcionar a melhor experiencia para todos os amantes dessa bebida tão maravilhosa que está no dia-a-dia das pessoas, o CAFÉ.</div>
                <a class="links" href="./sobre-nós">
                    <div class="leia-mais"><button class="btnl">Leia Mais</button></div>
                </a>
            </div>
        </div>
        </div>
        <div class="novidades">
            <div class="slide-novidades">

                <div class="slides-novidade">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                    <div class="slide-novidade s1">
                        <img src="./assets/img/bannernovidades/sakura slide.png" alt="">
                    </div>
                    <div class="slide-novidade ">
                        <img src="./assets/img/bannernovidades/matcha slide.png" alt="">
                    </div>
                    <div class="slide-novidade ">
                        <img src="./assets/img/bannernovidades/cheesecake slide.png" alt="">
                    </div>
                    <div class="slide-novidade ">
                        <img src="./assets/img/bannernovidades/mochi slide.png" alt="">
                    </div>
                    <div class="slide-novidade ">
                        <img src="./assets/img/bannernovidades/dorayaki slide.png" alt="">
                    </div>
                </div>
                <div class="navegation">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                    <label for="r4" class="bar"></label>
                    <label for="r5" class="bar"></label>
                </div>
            </div>
        </div>
        <div class="titulo">
            <p class="psub-titulo">Surpreenda-se</p>
        </div>
        <div class="sub-titulo">Conheça todos os nossos produtos, e viva uma experiencia única de sabores, que foram especialmente selecionados para você!</div>
        <div class="categoria-pai">
            <div class="categorias">
                <div class="cartao">
                    <img src="./assets/img/indeximg/doces.png" alt="">
                    <div class="info">
                        <div class="cont-cat">
                            <h1>Sobremesas</h1>
                            <p>Experimente nossas sobremesas feitas para harmonizar com o sabor dos café e dos chás</p>
                        </div>
                        <div class="btn-pai">
                            <a href="{{url('cardapio')}}" class="btn-categoria">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="cartao">
                    <img src="./assets/img/indeximg/bebidas.png" alt="">
                    <div class="info">
                        <div class="cont-cat">
                            <h1>Bebidas</h1>
                            <p>Experimente nossas incriveis bebidas e desfrute de uma experiencia unica</p>
                        </div>
                        <div class="btn-pai">
                            <a href="{{url('cardapio')}}" class="btn-categoria">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="cartao">
                    <img src="./assets/img/indeximg/salgados.png" alt="">
                    <div class="info">
                        <div class="cont-cat">
                            <h1>Salgados</h1>
                            <p>Deguste os nossos salgados com nossas bebibas</p>
                        </div>
                        <div class="btn-pai">
                            <a href="{{url('cardapio')}}" class="btn-categoria">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="receitas">
            <div class="receita-img">
                <img src="./assets/img/indeximg/receitas grupo.png" alt="">
            </div>
        </div>
        <div class="explore-filho">
            <div class="titulo-sub-explore">
                <div class="titulo-home">Explore...</div>
                <div class="conteudo-pqcomecoHo">
                    <div class="conteudos-pqcomecoHo"> Todas as torras de café, e suas intensidades, com grãos selecionados, com o intuito de faze-lo participar uma experiencia de especial.
                    </div>
                    <div class="conteudos-pqcomecoHo">Trazemos o melhor do café, para consumo rápido, com produtos frescos e de melhor qualidade possivel.
                    </div>
                    <div class="conteudos-pqcomecoHo"> Experimente os produtos prontos para consumo, ou se quiser que faça parte do seu dia-a-dia, experimente os grãos e faça o café em sua casa mesmo.
                    </div>
                    <div class="conteudos-pqcomecoHo">Testamos a qualidade para sempre melhor atende-lo.
                        <a class="links" href="{{url('cardapio')}}">
                            <div class="conheca"><button class="btnc">CONHEÇA NOSSO CAFÉ</button></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="imagem-explore"><img src="./assets/img/indeximg/cafes.png" alt=""></div>
            @endsection
  
  