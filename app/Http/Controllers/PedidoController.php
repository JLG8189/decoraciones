<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pedidos = Pedido::all();
        $pedidos = Auth::user()->pedidos;
        return view('pedido.pedido-index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pedido.pedido-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'required|string|min:5|max:255',
            'importe' => 'required|numeric',
            'fecha' => 'required|string|min:5|max:255',
            'articulo_id' => 'required|integer|min:1',
        ]);
        $request->merge(['user_id' => $request->user()->id]);
        Pedido::create($request->all());

        return redirect()->route('pedido.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('pedido.pedido-show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        return view('pedido.pedido-form', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'required|string|min:5|max:255',
            'importe' => 'required|numeric',
            'fecha' => 'required|string|min:5|max:255',
            'articulo_id' => 'required|integer|min:1',
        ]);
        Pedido::where('id', $pedido->id)->update($request->except('_token', '_method'));

        return redirect()->route('pedido.show', $pedido);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedido.index');
    }
}
