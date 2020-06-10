<?php

use App\Produto;
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
        Produto::create([
            'name' => 'GRÃO FORTE',
            'image' => './assets/img/nossocafe/grao forte.png',
            'prices' => '44.50',
            'qty' => '1',
            'description' => 'Um café intenso e torrado, com notas frutadas e leve acidez.',
            'id_category' => '1'
            ]);

     

            Produto::create([
            'name' => 'GRÃO MÉDIO',
            'image' => './assets/img/nossocafe/grao medio.png',
            'prices' => '35.50',
            'qty' => '8',
            'description' => 'Um café intenso e supreendentemente refrescante. Tem leve acidez e aromas refinados de cereais',
            'id_category' => '1'
        ]);
       

        Produto::create([
            'name' => 'GRÃO SUAVE',
            'image' => './assets/img/nossocafe/grao suave.png',
            'prices' => '25',
            'qty' => '5',
            'description' => 'Um café bastante aromático, floral e vibrante.',
            'id_category' => '1'
            ]);
    

            Produto::create([
            'name' => 'CAFÉ EM PÓ PREMIUM',
            'image' => './assets/img/nossocafe/cafe po.png',
            'prices' => '34',
            'qty' => '7',
            'description' => 'Um café com notas equilibradas e delicadas.',
            'id_category' => '1'
            ]);
       
            Produto::create([
            'name' => 'Chá de Limão',
            'image' => './assets/img/bebidas/chalimao.png',
            'prices' => '6.50',
            'qty' => '30',
            'description' => 'Um chá refrescante com o sauve sabor de limão e saber intenso do mate',
            'id_category' => '2'
            ]);
    }
}
