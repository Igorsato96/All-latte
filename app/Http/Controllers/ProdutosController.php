<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function getCafe()
    {
        // $categories= Category::all();
        $products =  Produto::where('id_category', '=', 1)->get();
        $categories= Categorias::where('id','=',1)->get();
        $total = count($products);
        
        return view('./site/nossocafe', [
            'products'=>$products,
            'total'=>$total,
            'categories'=>$categories,
            ]);
    }

    function getBebidas()
    {
        $categories= Categorias::where('id','=',2)->get();
        $products =  Produto::where('id_category', '=', 2)->get();
        $total = count($products);
        
        return view('./site/bebidas', [
                'products'=>$products,
                'total'=>$total,
                'categories'=>$categories,
                ]);
    }
    public function getProducts() 
    {
        $products = Produto::all();
        return view('./site/bebidas', ["products" => $products]);
    }
}
