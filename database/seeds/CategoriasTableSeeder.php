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
            ]);

        Categorias::create([
            'name' => 'Bebidas',
             ]);

        Categorias::create([
            'name' => 'Salgados',
            ]);

        Categorias::create([
            'name' => 'Sobremesas',
            ]);    
    }
}
