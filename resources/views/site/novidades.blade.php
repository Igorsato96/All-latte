@extends('layout')

@section('title','Novidades')
@section('img')
<div class="recei"><img src="./assets/img/menusimg/novidades.png" alt="">
</div>
@endsection
@section('background')
<div class="novi">
@section('conteudo')
        <div class="titulo-receita">Conheça e se encante</div>
        <div class="sub-titulo-novi">Tradição, textura, suavidade e simplicidade. </div>
        <div class="conte-novi">Trazemos para você, diretamente do Japão, criações do Chef Daichi Miura, da culinaria japonesa diretamente para sua casa.
Desde a época Edo, o chá e o mochi são marcos da cultura japonesa, representando assim uma cultura milenar com sabores expressivos e intensos, que marcam uma história  cheia de batalhas e compromissos.
Aqui temos dois sabores de chás populares do codidiano japones, o chá com folhas de Sakura (Arvore de cerejeiras),  e o sabor marcante do Matcha(chá verde), a textura e a suavidade do Mochi, doce feito apartir do Gohan(arroz japones, porem o proprio para mochi) e a maciez e o sabor do doce reiventado pelos japoneses, o cheesecake.
        </div>
        <div class="sub-cont-novi">Click para descobrir
            <h4>os sabores e detlahes de cada um</h4>
            </div>
            <div class="novi-banner">
                <div class="novi-img">
                    <a href="{{url('cardapio')}}"><img src="./assets/img/novidades/sakura.png"></a>
                   <a href="{{url('cardapio')}}"><img src="./assets/img/novidades/cake.png"></a>
                    <a href="{{url('cardapio')}}"><img src="./assets/img/novidades/mochi.png"></a>
                   <a href="{{url('cardapio')}}"><img src="./assets/img/novidades/matcha.png"></a>
                </div>
            </div>
@endsection
@endsection
  
