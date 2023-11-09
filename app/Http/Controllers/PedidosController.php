<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;

class PedidosController

{
    public function index(){


        $pedidos = Pedido::all();

return view ('pedidos.index') ->with ('pedidos', $pedidos);
    }
    public function show(){

        echo"<h1>Visualizar a maquina</h1>";

    }
    public function create(){
        return view('pedidos.create');
    }

    public function store(Request $request){

            Pedido::create($request ->only(['name','endorigem','enddestino','valor']));
            return redirect('/pedidos')->with('sucesso', 'pedido cadastrado com sucesso!');

    }

}
