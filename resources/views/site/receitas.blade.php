@extends('layout')
@section('title','Receitas')
        @section('img')
            <div class="imgbanner"><img src="./assets/img/menusimg/receitas.png" alt="">
            </div>
            @endsection
            @section('background')
            <div class="rece">
            @section('conteudo')
        <div class="titulo-receita">Experimente criar</div>
        <div class="conte-receita">Já imaginou ter a experiencia de fazer uma receita deliciosa como as que vendemos no nosso café? Aqui você pode! Abrimos este espaço para compartilhar com você, receitas maravilhosas com café. Sabe aquele café fresquinho, o que você mesmo pode
            moer em casa, ou aquele café já moido de qualidade? Aqui você pode adiquirir e testar em suas receitas favoritas que aprendeu conosco. É a qualidade e sabor do café com o aconchego de casa.
        </div>
        <div class="todos-videos">
            <div class="video-card">
                <div class="video-content">
                    <h1>CAFÉ CREMOSO COM CHOCOLATE</h1>
                    <img src="./assets/img/videoimg/CafeCremosoComChocolate.png">
                    <h2>INGREDIENTES:</h2>
                    <p>2 XÍCARAS(CHÁ) DE AÇÚCAR</p>
                    <p>50g DE CAFÉ SOLÚVEL</p>
                    <p>3 COLHERES(SOPA) DE CHOCOLATE EM PÓ</p>
                    <p>1 XÍCARA(CHÁ) DE ÁGUA QUENTE</p>
                    <div>
                    <a href="#" onclick="toggle();">ASSISTIR AGORA</a>
                    </div>
                </div>
            </div>
            <div class="trailer">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-znqDm-W9A8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <img src="./assets/img/videoimg/close.png" class="close-receita" onclick="toggle();">
            </div>
            <div class="video-card">
                <div class="video-content">
                    <h1>FRAPPUCCINO</h1>
                    <img src="./assets/img/videoimg/frapuccino.png">
                    <h2>INGREDIENTES:</h2>
                    <p>250ml de Café</p>
                    <p>250ml de Leite</p>
                    <p>2 Colheres de Sopa Cob de Chocolate</p>
                    <p>1 Colher de Sopa de Açúcar</p>
                    <p>1 Colher de Sopa de Chocolate em Pó</p>
                    <p>1 caixinha de Chantilly para bater</p>
                    <div>
                    <a href="#" onclick="toggle();">ASSISTIR AGORA</a>
                    </div>
                </div>
            </div>
            <div class="trailer">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-znqDm-W9A8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <img src="./assets/img/videoimg/close.png" class="close-receita" onclick="toggle();">
            </div>
            <div class="video-card">
                <div class="video-content">
                    <h1>CAFÉ GELADO COM LEITE</h1>
                    <img src="./assets/img/videoimg/CafeGelado Com Leite.png">
                    <h2>INGREDIENTES:</h2>
                    <p>250ml de Café</p>
                    <p>50ml de LEITE</p>
                    <p>GELO (QUANTO QUISER)</p>
                    <p>1 Colher de Sopa de Açúcar</p>
                    <div>
                    <a href="#" onclick="toggle();">ASSISTIR AGORA</a>
                    </div>
                </div>
            </div>
            <div class="trailer">
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-znqDm-W9A8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <img src="./assets/img/videoimg/close.png" class="close-receita" onclick="toggle();">
            </div>
        </div>
    @endsection
    @endsection
    <script type="text/javascript">
        function toggle() {
            var trailer = document.querySelector(".trailer")
            trailer.classList.toggle("active")
        }
    </script>
