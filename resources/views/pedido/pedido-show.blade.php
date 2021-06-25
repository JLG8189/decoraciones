@extends('layouts.temp')
@section('contenido')
    <h1>Detalle del Pedido</h1>

    <p>
        <a href="{{ route('pedido.index') }}">Listado de Pedidos</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Importe</th>
                <th>Fecha</th>
                <th>Articulo ID</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->cantidad }}</td>
                <td>{{ $pedido->descripcion }}</td>
                <td>{{ $pedido->importe }}</td>
                <td>{{ $pedido->fecha }}</td>
                <td>{{ $pedido->articulo_id }}</td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('pedido.destroy', $pedido) }}" method='POST'>
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Pedido">
    </form>

@endsection