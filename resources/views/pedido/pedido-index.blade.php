@extends('layouts.principal')
@section('contenido')
    
<!--h2>Listado de Pedidos</h2-->

<!--a class="filled-button"
    href="{{ route('pedido.create') }}">    
    Agregar Pedido
</a-->

<head>
    <style>
        table.tabla {
        width: 100%;
        background-color: #ffffff;
        border-collapse: separate;
        border-width: 3px;
        border-color: #b0b0b0;
        border-style: outset;
        color: #000000;
        }

        table.tabla td, table.tabla th {
        border-width: 3px;
        border-color: #b0b0b0;
        border-style: outset;
        padding: 3px;
        }

        table.tabla thead {
        background-color: #ff8324;
        }
    </style>
</head>


                
                   
                            
                            
                        

    <table class="tabla", class = "center", border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Importe</th>
                <th>Fecha</th>
                <th>Usuario</th>
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
                    <td>{{ $pedido->user->name }}</td>
                    <td>{{ $pedido->articulo_id }}</td>
                    <td>
                        <a href="{{ route('pedido.edit', $pedido) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

                
            

    <div class="read_bt"><a href="{{ route('pedido.create') }}">Agregar Pedido</a></div>

@endsection