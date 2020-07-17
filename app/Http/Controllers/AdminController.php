<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Http\Requests\StoreUpdateProdutosRequest;
use App\PedidoProdutos;
use App\Pedidos;
use App\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    private $objProduto;
    private $objCategoria;
    public function __construct()
    {
        $this->objProduto = new Produtos();
        $this->objCategoria = new Categorias();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('.site/add-produtos',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('.site/add-produtos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUpdateProdutosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProdutosRequest $request)
    {   
        $data = $request->only('name','prices','qty','description','id_category','ativo');

        if($request->hasFile('image')&& $request->image->isValid()){
            $imagePatch = $request->image->store('products');
            $data['image'] =  $imagePatch;
        }
        
            $this->objProduto->create($data);

          return redirect()->route('painelprodutos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = $this ->objProduto ->find($id);
        $categorias = Categorias::all();
        return view('.site/add-produtos',compact('produtos','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\StoreUpdateProdutosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProdutosRequest $request, $id)
    {
        if(!$produtos = $this->objProduto->find($id))
            return redirect()->back();

            $data = $request->all();

            if($request->hasFile('image') && $request->image->isValid()){
                if($produtos->image && Storage::exists($produtos->image)){
                    Storage::delete($produtos->image);
                }

                $imagePatch = $request->image->store('products');
                $data['image'] = $imagePatch;
            }

            $produtos->update($data);
            return redirect()->route('painelprodutos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ProdutoView()
    {
        $produtos = Produtos::all();
        $ativos = Produtos::where('ativo','S')->get();
        $inativos = Produtos::where('ativo','N')->get();
        $totalAtivos = count( $ativos);
        $totalInativos = count( $inativos);
        $total = count( $produtos);
        $categorias = Categorias::all();
        $totalCategorias = count($categorias);
        return view('.site/painelProdutos',compact('produtos','total','totalAtivos','totalInativos','totalCategorias'));
      
    }

    public function AdminPainel()
    {
       $pedidos = Pedidos::whereDate('created_at', '>=',now()->subDays(30))->get();
       $totalpedidos = count($pedidos);

       $pagos = Pedidos::where('status','PA')->get();
       $totalpagos= count($pagos);

       $reservados = Pedidos::where('status','RE')->get();
       $totalreservados = count($reservados);

       $cancelados = Pedidos::where('status','CA')->get();
       $totalcancelados= count($cancelados);
       
       $itens =  PedidoProdutos::whereDate('created_at', '>=',now()->subDays(30))->get();
       $totalitens= count($itens);
        return view('.site/paineladmin',compact('totalpedidos','totalpagos','totalreservados','totalcancelados','totalitens'));
      
    }

    public function AdminPedidos()
    {
        $pedidos = Pedidos::where('status','PA')->get();

        $pedidohoje = Pedidos::whereDate('created_at','>=',now())->get();
        $totalpedidoshoje = count($pedidohoje);

        $produtoshoje = PedidoProdutos::whereDate('created_at','>=',now())->get();
        $totalprodutoshoje = count($produtoshoje);

        $pedidosmes = Pedidos::whereDate('created_at', '>=',now()->subDays(30))->get();
        $totalpedidosmes = count($pedidosmes);

        $produtosmes = PedidoProdutos::whereDate('created_at', '>=',now()->subDays(30))->get();
        $totalprodutosmes = count($produtosmes);
        return view('.site/painelpedidos',compact('pedidos','totalpedidoshoje','totalpedidosmes','totalprodutoshoje','totalprodutosmes'));
    }
}
