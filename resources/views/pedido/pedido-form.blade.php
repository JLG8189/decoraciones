@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de Pedido</h1>

    <p>
        <a href="{{ route('pedido.index') }}">Listado de Pedidos</a>
    </p>

    @if(isset($pedido))
        <form action="{{ route('pedido.update', $pedido) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('pedido.store') }}" method="POST">
    @endif
    
        @csrf
        <label for="">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" value="{{ $pedido->cantidad ?? '' }}">
        <br>

        <label for="">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $pedido->descripcion ?? '' }}">
        <br>

        <label for="">Importe</label>
        <input type="text" name="importe" id="importe" value="{{ $pedido->importe ?? '' }}">
        <br>

        <label for="">Fecha</label>
        <input type="text" name="fecha" id="fecha" value="{{ $pedido->fecha ?? '' }}">
        <br>

        <label for="">Articulo ID</label>
        <input type="text" name="articulo_id" id="articulo_id" value="{{ $pedido->articulo_id ?? '' }}">
        <br>

        <input type="submit" value="Guardar">
    </form>
@endsection