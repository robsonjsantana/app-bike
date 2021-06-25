<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aluguels               = Aluguel::where('status', 'Alugado ')
                                          ->orderBy('created_at', 'desc')->paginate(10);
        $alugueisFinalizados    = Aluguel::where('status', 'Finalizado')->get();
        return view('pages.listar-alugueis', compact('aluguels', 'alugueisFinalizados'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes       = Cliente::all();
        return view('pages.alugar-produto', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     
    public function store(Request $request)
    {
            //Instancia do model cliente
            $aluguels   =   new Aluguel;

            //Regra de Negócio 

            // Constantes
            $valorHoraBike          = 10.0;
            $valorHoraPatins        = 15.0;
            
            //. Fim Constantes
            // Calcula o valor da Bike
            $qtdBikes               = $request->input('qtd_bikes');
            $horasBikes             = $request->input('horas_bike');
            $totalBikes             = $valorHoraBike * $qtdBikes * $horasBikes;
             // Calcula o valor do Patins
            $qtdPatins              = $request->input('qtd_patins');
            $horasPatins            = $request->input('horas_patins');
            $totalPatins            = $valorHoraPatins * $qtdPatins * $horasPatins;

            $valorTotal             = $totalBikes + $totalPatins;

            

            //colunas do BD
            $aluguels->cliente_id          = $request->input('cliente_id');
            $aluguels->qtd_bikes           = $request->input('qtd_bikes');
            $aluguels->horas_bike          = $request->input('horas_bike');
            $aluguels->qtd_patins          = $request->input('qtd_patins');
            $aluguels->horas_patins        = $request->input('horas_patins');
            $aluguels->valor               = $valorTotal;
            $aluguels->obs                 = $request->input('obs');

            $aluguels->save();

            $request->session()->flash('message', 'Aluguel cadastrado com Sucesso!');
            return Redirect::to('/listar-alugueis');
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
       /*  return view('cadastrar-produto'); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //{{  }}
        $prodAluguel        = Aluguel::find($id);
        return view('pages.finalizar-aluguel', compact('prodAluguel'));
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
        //
        $prodAluguel                    = Aluguel::find($id);
        $prodAluguel->status            = $request->input('status');

        $prodAluguel->save();
        $request->session()->flash('message', 'Aluguel Finalizado com Sucesso!');
        return Redirect::to('/listar-alugueis');

    }

    /**{{  }}
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
