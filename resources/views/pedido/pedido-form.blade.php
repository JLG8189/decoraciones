@extends('layouts.pedidos')
@section('content')

    <!--h1></h1-->
    <br>
    <p>
        <div class="container">
        <div class="read_bt"><a href="{{ route('pedido.index') }}">Pedidos</a></div>
        </div>
        <!--a href="{{ route('pedido.index') }}">Listado de Pedidos</a-->
    </p>

    <div class="container">
    @if ($errors->any())
    <div class="row">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <div class="box_main">
            <div class="house_icon">
                <img src="{{ asset('images/error.png') }}" class="image_1">
                <img src="{{ asset('images/error.png') }}" class="image_2">
            </div>
            <h3 class="decorate_text">Verificar los campos del formulario</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <!--div class="readmore_bt"><a href="{{ route('pedido.create') }}">Recargar</a></div-->
        </div>
    </div>
    </div>
    @endif
    </div>

    @if(isset($pedido))
        <form action="{{ route('pedido.update', $pedido) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('pedido.store') }}" method="POST">
    @endif
        
        @csrf
        
        <div class="contact_section_2 layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Cantidad" name="cantidad" id="cantidad" value="{{ old('cantidad') ?? $pedido->cantidad ?? '' }}">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Descripción" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $pedido->descripcion ?? '' }}">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Importe" name="importe" id="importe" value="{{ old('importe') ??  $pedido->importe ?? '' }}">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Fecha" name="fecha" id="fecha" value="{{ old('fecha') ??  $pedido->fecha ?? '' }}">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Articulo ID" name="articulo_id"  id="articulo_id" value="{{ old('articulo_id') ??  $pedido->articulo_id ?? '' }}">
                        </div>
                        <div class="send_btn">
                            <input type="submit" class="main_bt" value="Guardar"><!--a href="#">SEND</a></div-->
                        </div>
                     </div>
                  </div>
               </div>
                    <div class="col-md-6 padding_0">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.6832453628726!2d-103.45364778576422!3d20.478199111722176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f540761233d07%3A0xf2849908f7870987!2sCalle%20Degollado%20Pte.%20104%2C%2045640%20Tlajomulco%20de%20Z%C3%BA%C3%B1iga%2C%20Jal.!5e0!3m2!1ses!2smx!4v1624920487128!5m2!1ses!2smx" width="600" height="452" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                        </div>
                   </div>
            </div>
         </div!>
      </div>

        <!--input type="submit" value="Guardar"-->
    </form>

@endsection