@extends('layout')

@section('title','Duvidas')

@section('img')
    <div class="imgbanner"><img src="./assets/img/menusimg/duvidas.png" alt=""></div>
@endsection
@section('conteudo')
        <div class="duvidas-pai">
            <div class="titulo-principal">
                <p>Dúvidas Frequentes</p>
            </div>
        </div>
        <div class="duvidas-filho">
            <div class="tduvidas">
                <p class="sub-titulo">PROBLEMAS TECNICOS</p>
            </div>
            <div class="sub-tduvidas"><span>1.</span> Estava fazendo uma compra, mas minha internet caiu, o que devo fazer?</div>
            <div class="sub--tduvidas"> Se você ainda não finalizou a compra,nada foi cobrado , pode voltar ao site e refazer sua lista.</div>
            <div class="sub-tduvidas"><span>2.</span> Finalizei o pedido, e não recebi nenhum e-mail de confirmação, o que fazer?</div>
            <div class="sub--tduvidas"> As vezes os servidores de email podem falhar, ou sua caixa de email pode estar cheia. Mas fique tranquilo, você pode visualizar o status do seu pedido quando quiser aqui pelo site. </div>
            <div class="tduvidas">
            <p class="sub-titulo">COBRANÇA</p>
            </div>
            <div class="sub-tduvidas"><span>1.</span> Como posso pagar as compras?</div>
            <div class="sub--tduvidas">Você pode pagar com cartão de crédito aqui pelo site, e com debito ou VR SODEXO, ALELO na entrega.</div>
            <div class="sub-tduvidas"><span>2.</span >Após finalizar a compra, posso desistir de algum item? Será descontado do cartão?</div>
            <div class="sub--tduvidas">Tanto para pagamentos pelo site ou na entrega, infelizmente não aceitamos desistencia. </div>
            <div class="sub-tduvidas"><span>3.</span> Paguei com o cartão errado, como proceder?</div>
            <div class="sub--tduvidas">Infelizmente se escolheu a opção de pagar pelo site o valor será debitado do cartão cadastrado. Caso não tenha certeza de que cartão usar, sugerimos que pague na entrega. </div>
            <div class="tduvidas">
            <p class="sub-titulo">ENTREGA</p>
            </div>
            <div class="sub-tduvidas"><span>1.</span> Qual o prazo de entrega?</div>
            <div class="sub--tduvidas">Você pode pagar com cartão de crédito aqui pelo site, e com debito ou VR SODEXO, ALELO na entrega.</div>
            <div class="sub-tduvidas"><span>2.</span> Se o produto vier violado, como devo proceder?</div>
            <div class="sub--tduvidas">Sugerimos que não aceite a entrega, e nos ligue imediatamente, para que possamos enviar seu pedido novamente por outro entregador. </div>
            <div class="sub-tduvidas"><span>3.</span> Como ocorre o processo de devolução de produtos?</div>
            <div class="sub--tduvidas"> Nós só aceitamos a devolução de um pedido , caso a embalagem esteja violada na entrega, o mesmo deverá não ser recebido caso haja algo de errado.</div>
        </div>
@endsection
    