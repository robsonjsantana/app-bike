<?php

namespace App\Http\Controllers;
{{  }}
use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista todos os clientes cadastrados
        $clientes    = Cliente::orderBy('id', 'desc')->paginate(10);
        return view('pages.listar-cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.cadastrar-cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(ClienteRequest $request)
    {
        //Instancia do model cliente
        $clientes   =   new Cliente;

     /*    $user       = Auth::user()->name; //usuario logado */

        //colunas do BD
     /*    $clientes->user     = $user; */
        $clientes->name     = $request->input('name');
        $clientes->email     = $request->input('email');
        $clientes->endereco     = $request->input('endereco');
        $clientes->cpf     = $request->input('cpf');
        $clientes->celular     = $request->input('celular');

        $clientes->save();

        $request->session()->flash('message', 'Cliente cadastrado com Sucesso!');
        return Redirect::to('listar-cliente');
        
    }

    public function modalStore(ClienteRequest $request)
    {
        //Instancia do model cliente
        $clientes   =   new Cliente;

     /*    $user       = Auth::user()->name; //usuario logado */

        //colunas do BD
     /*    $clientes->user     = $user; */
        $clientes->name     = $request->input('name');
        $clientes->email     = $request->input('email');
        $clientes->endereco     = $request->input('endereco');
        $clientes->cpf     = $request->input('cpf');
        $clientes->celular     = $request->input('celular');

        $clientes->save();

        $request->session()->flash('message', 'Cliente cadastrado com Sucesso!');
        return Redirect::to('/alugar-produto');
        
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
         $cliente = Cliente::find($id);
         return view('pages.show-cliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::find($id);
        return view('pages.edit-cliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        //

        $cliente = Cliente::find($id);

        $user               = Auth::user()->name;

        $cliente->name     = $request->input('name');
        $cliente->email     = $request->input('email');
        $cliente->endereco     = $request->input('endereco');
        $cliente->cpf     = $request->input('cpf');
        $cliente->celular     = $request->input('celular');

        $cliente->save();

        $request->session()->flash('message', 'Cliente Atualizado com Sucesso😉');
        return Redirect::to('/listar-cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $cliente = Cliente::find($id);
        //Deletar cliente do bando de dados
        $cliente->delete();
        //Redireciona o usuario apos o arquivo ser deletado.
        $request->session()->flash('message', 'Cliente deletado com Sucesso!');
        return Redirect::to('listar-cliente');
    }


}