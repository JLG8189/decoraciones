@extends('layouts.principal')
@section('contenido')
    
<h2>Listado de Pedidos</h2>

    <p>
        <a href="{{ route('pedido.create') }}">Agregar Pedido</a>
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->cantidad }}</td>
                    <td>
                        <a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->descripcion }}</a>
                    </td>
                    <td>{{ $pedido->importe }}</td>
                    <td>{{ $pedido->fecha }}</td>
                    <td>{{ $pedido->articulo_id }}</td>
                    <td>
                        <a href="{{ route('pedido.edit', $pedido) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection