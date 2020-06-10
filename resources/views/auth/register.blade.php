<html langue="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('assets/css/estilo.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/06746c852c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Já possui cadastro?</h2>
                <p class="description description-primary">Manter-se conectado conosco</p>
                <p class="description description-primary">Faça o login com suas informações pessoais</p>
                <button id="signin" class="btn btn-primary">login</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar conta</h2>
                <!-- <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div> -->
                <!-- social media-->
                <!-- <p class="description description-second">or use email for registrion:</p> -->
                <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                    <label class="label-input" for="name">
                        <i class="far fa-user icon-modify"></i>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                    </label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu e-mail">
                    </label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="label-input" for="email-confirm">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required autocomplete="email" placeholder="Confirmar e-mail">
                    </label>
                    <label class="label-input" for="password">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
                    </label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="label-input" for="password-confirm">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar senha">
                    </label>
                    <button type="submit" class="btn btn-second" >Cadastrar</button>
                </form>
            </div>
            <!--segunda columa-->
        </div>
              
        <!--primeiro conteudo-->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">bem vindo ao CAFFÈ AL LATTE!</h2>
                <p class="description description-primary">Cadastre seus dados!</p>
                <p class="description description-primary">E aproveite os nossos produtos</p>
                <button id="signup" class="btn btn-primary">Cadastrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Acessar o cadastro</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <!-- social media-->
                <p class="description description-second">Use seu email:</p>
                <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                    <label class="label-input" for="email">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Digite seu e-mail"> 
                    </label>
                    @error('email')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                    <label class="label-input" for="password">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                    </label>
                    @error('password')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                     @if (Route::has('password.request'))
                    <a class="password" href="{{ route('password.request') }}">forget your password</a>
                    @endif
                    <button type="submit" class="btn btn-second" >Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>