<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function show($id)
    {
        {
            $categories = Categorias::where('id',$id)->get();
            // $category_products = Produtos::where('id_category',$id)->get();
            $category_products  = Produtos::where([
                'id_category' => $id,
                'ativo' => 'S',
            ])->get();
            $total = count($category_products);
            return view ('./site/products',compact('category_products','total','categories'));
        }
    }

}
