<?php

use App\Produto;
use App\Produtos;
use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::create([
            'name' => 'GRÃO FORTE',
            'image' => './assets/img/nossocafe/grao forte.png',
            'prices' => '44.50',
            'qty' => '1',
            'description' => 'Um café intenso e torrado, com notas frutada e leve acidez.',
            'id_category' => '1'
            ]);

            Produtos::create([
                'name' => 'GRÃO MÉDIO',
                'image' => './assets/img/nossocafe/grao medio.png',
                'prices' => '35.50',
                'qty' => '1',
                'description' => 'UM CAFÉ INTENSO E SUPREENDENTEMENTE REFRESCANTE. TEM LEVE ACIDEZ E AROMAS REFINADOS DE CEREAIS',
                'id_category' => '1'
                ]);

                Produtos::create([
                    'name' => 'GRÃO SUAVE',
                    'image' => './assets/img/nossocafe/grao suave.png',
                    'prices' => '25',
                    'qty' => '1',
                    'description' => 'UM CAFÉ BASTANTE AROMÁTICO, FLORAL E VIBRANTE.',
                    'id_category' => '1'
                    ]);

                    Produtos::create([
                        'name' => 'CAFÉ EM PÓ PREMIUM',
                        'image' => './assets/img/nossocafe/cafe po.png',
                        'prices' => '34',
                        'qty' => '1',
                        'description' => 'UM CAFÉ COM NOTAS EQUILIBRADAS E DELICADAS.',
                        'id_category' => '1'
                        ]);

        Produtos::create([
            'name' => 'CAFÉ AMERICANO',
            'image' => './assets/img/bebidas/americano.png',
            'prices' => '6.50',
            'qty' => '1',
            'description' => 'O café americano ou simplesmente Americano é um estilo de café preparado por adição de água quente no café, dando uma força semelhante, mas sabor diferente, do café do gotejamento regular. A força de um Americano varia com o número de colheres de café e da quantidade de água adicionada.',
            'id_category' => '2'
            ]);

            Produtos::create([
                'name' => 'CAFÉ LATTE',
                'image' => './assets/img/bebidas/latte.png',
                'prices' => '8.50',
                'qty' => '1',
                'description' => 'Latte é uma bebida de café expresso com uma quantidade generosa de espuma de leite no topo.',
                'id_category' => '2'
                ]);

                Produtos::create([
                    'name' => 'CAPUCCINO',
                    'image' => './assets/img/bebidas/capuccino.png',
                    'prices' => '6.50',
                    'qty' => '1',
                    'description' => 'Um cappuccino clássico, muito famoso no Brasil e consiste em um terço de café expresso, um terço de leite vaporizado e um terço de espuma de leite vaporizado.',
                    'id_category' => '2'
                    ]);

                    Produtos::create([
                        'name' => 'CHOCOLATE QUENTE',
                        'image' => './assets/img/bebidas/chocolate quente.png',
                        'prices' => '7.50',
                        'qty' => '1',
                        'description' => 'O chocolate quente ou cacau quente é uma bebida quente e doce feita com chocolate ou cacau em pó dissolvido no leite quente.',
                        'id_category' => '2'
                        ]);

                        Produtos::create([
                            'name' => 'MOCCHA',
                            'image' => './assets/img/bebidas/moccha.png',
                            'prices' => '9.90',
                            'qty' => '1',
                            'description' => 'O café moca ou mocha é uma variante do café com leite. É normalmente feito com um terço de expresso e dois terços de leite vaporizado,mas uma porção de chocolate é adicionada em forma de chocolate em pó adoçado, embora algumas variantes utilizem xarope de chocolate. Mocha pode conter chocolate escuro (meio amargo) ou ao leite.
                                Diferente do capuccino, o moca (mocha) não contém a conhecida espuma de leite por cima. Ele deve ter nata batida (chantilly) pulverizado com canela ou cacau em pó. Marshmallow também pode ser colocado por cima para dar sabor e decorar.',
                            'id_category' => '2'
                            ]);

                            Produtos::create([
                                'name' => 'MILKSHAKE CHOCOLATE',
                                'image' => './assets/img/bebidas/milkchoco.png',
                                'prices' => '8.50',
                                'qty' => '1',
                                'description' => 'É uma bebida à base de leite e algum outro alimento, normalmente fruta e/ou sorvete.',
                                'id_category' => '2'
                                ]);

                                Produtos::create([
                                    'name' => 'CHÁ DE LIMÃO',
                                    'image' => './assets/img/bebidas/chalimao.png',
                                    'prices' => '6.50',
                                    'qty' => '1',
                                    'description' => 'UM CHÁ REFRESCANTE COM O SAUVE SABOR DE LIMÃO E SABER INTENSO DO MATE',
                                    'id_category' => '2'
                                    ]);
         
    }
}
