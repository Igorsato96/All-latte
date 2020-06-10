@extends('layout')

@section('title','Sobremesas')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   

<body class="bebidas">
    <div class="popup-bebidas">
        <header>
            <div class="imgbanner"><img src="./assets/img/menusimg/sobremesas.png" alt="">
            </div>
        </header>
        <main>
            <div class="titulo-bebidas">Sobremesas</div>
            <div class="qtd-produtos">
                <div class="quantidade">8 produtos </div>
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
                <div class="product-card">
                        <h1 class="text-random2">COOKIE</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/cookie.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>COOKIE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">TORTA CHOCOLATE</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/torta chocolate.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-torta" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-torta" id="popup-torta">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/torta chocolate.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>TORTA CHOCOLATE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">BOLO BRIGADEIRO</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/bolo brigadeiro.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/bolo brigadeiro.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>COOKIE</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">SONHO</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/sonho.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>SONHO</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">PRETZEL CANELA</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/pretzel.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>PRETZEL CANELA</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">MOCHI</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/mochi.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>MOCHI</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">TIRAMISU ITALIANO</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/tiramisu.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>TIRAMISU ITALIANO</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <h1 class="text-random2">CHEESECAKE JAPONES</h1>
                        <div class="product-pic"><img src="./assets/img/sobremesas/cake.png"></div>
                        <div class="product-colors1">
                        </div>
                        <div class="product-info2">
                            <div class="product-price">R$ 4,50</div>
                            <div class="botao">
                                <div id="adicionar">
                                    <div class="product-button adicionar">adicionar</div>
                                </div>
                                <div id="saiba-mais">
                                    <a href="#popup-expresso" class="product-button saiba-mais">saiba mais</a>
                                    <div class="popup-expresso" id="popup-expresso">
                                        <div class="popup-inner">
                                            <div class="popup-photo">
                                                <img src="./assets/img/sobremesas/cookie.png">
                                            </div>
                                            <div class="popup-text">
                                                <h1>CHEESECAKE JAPONES</h1>
                                                <p>Qual é o segredo por trás de cada xícara? Nada como o aroma e o sabor de um expresso tirado na hora! Nascido na Itália, o café expresso foi concebido para agilizar o processo de produção da bebida. Os apressadinhos
                                                    de plantão que adoram um bom café, agradecem! A bebida é preparada com os mesmos grãos do café coado, mas nesse método, a estrela responsável pelos aromas e os sabores é a máquina de expresso. Nossa
                                                    cafeteria conta com os melhores equipamentos , para que você desfrute do sabor ideal.</p>
                                                <a class="close" href="">×</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    </section>
    </main>
    
   
    <script src="./assets/js/main.js"></script>
