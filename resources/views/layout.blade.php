<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsivo.css')}}">
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>
<body>
        @yield('background')
    <header>
        @yield('img')
        <menu>
        <div class="logo">
            <a href="{{url('')}}" class="logo"><img src="{{url('./assets/img/logo.png')}}" alt=""></a>
        </div>
        <div class="menus">
            <div class="menu">
                <a href="{{url('')}}">Home</a>
            </div>
            <div class="menu">
                <a href="{{url('cardapio')}}">CARDAPIO</a>
            </div>
            <div class="menu">
                <a href="{{url('novidades')}}">NOVIDADES</a>
            </div>
            <div class="menu">
                <a href="{{url('receitas')}}">RECEITAS</a>
            </div>
           
            <div class="menu-pedidos">
                <a href="{{url('carrinho')}}"><i class="fas fa-shopping-bag"></i>PEDIDOS</a>
            </div>
            @if( auth()->check() &&  auth()->user()->id == 1 )
                <div class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{url('admin')}}">Olá {{ auth()->user()->name }}</a>
                </div>
                <div class="nav-logout">
                    <a class="nav-link" href="{{url('logout')}}"><i class="fas fa-power-off"></i></a>
                </div>
                @elseif( auth()->check() )
                <div class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{url('menuprofile')}}">Olá {{ auth()->user()->name }}</a>
                </div>
                <div class="nav-logout">
                    <a class="nav-link" href="{{url('logout')}}"><i class="fas fa-power-off"></i></a>
                </div>
                @else
            <div class="menu-login">
                <a href="{{url('register')}}">LOGIN | CADASTRAR</a>
            </div>  
                @endif
        </div>
        </menu>
        </header>
    <main>
        @yield('conteudo')
    </main>
    <footer>
        <div class="footer-pai">
            <div class="chevron"><i class="fas fa-chevron-up"></i></div>
        </div>
        <div class="menus-footer">
            <div class="menus-menu">
                <div class="menu-center">
                    <p>menu</p>
                </div>
                <div class="ul-menu">
                    <ul class="menus-home">
                        <a href="./"><li class="menu-home">Home</li></a>
                        <a href="{{url('cardapio')}}"><li class="menu-home">Cardapio</li></a>
                        <a href="{{url('novidades')}}"><li class="menu-home">Novidades</li></a>
                        <a href="{{url('receitas')}}"><li class="menu-home">Receitas</li></a>
                    </ul>
                </div>
                <div class="grupo-footer">
                    <div>
                        <div class="font-footer ">nos siga</div>
                        <div class="icon-color">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="font-footer ">CONTATO</div>
                        <div class="contato-color">( 11 ) 2266 - 7445</div>
                    </div>
                    <div>
                        <a class="links" href="{{url('termos')}}">
                            <div class="font-faq">TERMOS E CONDIÇÕES</div>
                        </a>
                        <a class="links" href="{{url('duvidas')}}">
                            <div class="font-faq">DÚVIDAS FREQUENTES</div>
                        </a>
                    </div>
                </div>
                <div class="criador">
                    <div>
                        <div class="powered">Powered</div>
                        <div class="autor">BY MASSAHIKO</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>