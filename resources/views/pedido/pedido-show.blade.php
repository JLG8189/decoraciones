@extends('layouts.verPedido')
@section('contenido')


<div class="container">
<div class="col-lg-12 col-sm-12 col-md-4">
        <div class="box_main">
            <ul>
                <li class="tation_text" style="font-size:125%;">ID: {{ $pedido->id }}</li>
                <li class="tation_text" style="font-size:125%;">Cantidad: {{ $pedido->cantidad }}</li>
                <li class="tation_text" style="font-size:125%;">Descripción: {{ $pedido->descripcion }}</li>
                <li class="tation_text" style="font-size:125%;">Importe: {{ $pedido->importe }}</li>
                <li class="tation_text" style="font-size:125%;">Fecha: {{ $pedido->fecha }}</li>
                <li class="tation_text" style="font-size:125%;">Articulo ID: {{ $pedido->articulo_id }}</li>
            </ul>
        </div>
    </div>
    </div>

        <!--table border="1">
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
    </table-->

<br>
<div class="container">
    <form action="{{ route('pedido.destroy', $pedido) }}" method='POST'>
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Pedido">
    </form>
    </div>
    
    <p>
            <div class="container">
                <div class="read_bt"><a href="{{ route('pedido.index') }}">Pedidos</a></div>
            </div>
            <!--a href="{{ route('pedido.index') }}">Listado de Pedidos</a-->
        </p>
    @endsection
    @section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <form action="{{ route('pedido.agrega-envio', $pedido) }}" method="POST">
     @csrf
     <div class="col-lg-12 col-sm-12 col-md-4">
        <div class="box_main">
        <h3 class="decorate_text">Seleccionar ID del Envío</h3>
        <select name="envio_id">
            @foreach ($envios as $envio)
                <option value="{{ $envio->id }}">{{$envio->id}}</option>
            @endforeach
        </select>
        <input type="submit" value="Actualizar">
        </div>
    </div>
    </form>
    </div>
    <br>
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-md-4">
            <div class="box_main">
                <ul>
                    <li class="tation_text" style="font-size:150%;">Dirección del envío</li>
                    <ul>
                        @foreach ($pedido->envios as $envio)
                            <li class="tation_text">ID: {{ $envio->id }}</li>
                            <li class="tation_text">{{ $envio->direccion }}</li>
                        @endforeach
                    </ul>
                </ul>
            </div>
        </div>
    </div>

    @endsection

