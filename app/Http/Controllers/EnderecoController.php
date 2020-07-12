<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Endereco;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    private $objUser;
    private $objEndereco;
    public function __construct()
    {
        $this->middleware('auth');
        $this->objUser = new User();
        $this->objEndereco =new Endereco();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
        return view('.site/add-endereco');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('.site/add-endereco');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->enderecos()->create([
          'name' => $request->name,
          'cep'=> $request->cep,
          'number' => $request->number,
          'complement'=> $request->complement,
          'state' => $request->state,
          'city' => $request->city,
          'address' => $request->address,
          ]);

          return redirect()->route('endereco');
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
        $endereco = $this ->objEndereco ->find($id);
        $users = $this ->objUser ->find(Auth::user()->id);
        return view('.site/add-endereco',compact('endereco', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objEndereco->where(['id'=>$id])->update([
            'name' => $request->name,
            'cep'=> $request->cep,
            'number' => $request->number,
            'complement'=> $request->complement,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
        ]);   
        return redirect()->route('endereco');
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

    public function indexPerfil()
    {
        $user=User::find(Auth::user()->id);
        $enderecos = $user->enderecos()->get(); 
        return view('.site/endereco',compact('enderecos'));
      
    }
}
