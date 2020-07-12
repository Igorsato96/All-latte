<?php

use App\Categorias;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::create([
            'name' => 'Cafés',
            'imgbanner' => './assets/img/menusimg/nosso café.png',
            'image' => './assets/img/cardapio/nossocafe.png',
            ]);

        Categorias::create([
            'name' => 'Bebidas',
            'imgbanner' => './assets/img/menusimg/bebidas.png',
            'image' => './assets/img/cardapio/bebidas.png',
             ]);

        Categorias::create([
            'name' => 'Salgados',
            'imgbanner' => './assets/img/menusimg/salgados.png',
            'image' => './assets/img/cardapio/salgados.png',
            ]);

        Categorias::create([
            'name' => 'Sobremesas',
            'imgbanner' => './assets/img/menusimg/sobremesas.png',
            'image' => './assets/img/cardapio/sobremesas.png',
            ]);    
    }
}
