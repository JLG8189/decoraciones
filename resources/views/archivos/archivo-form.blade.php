<h4>
    Carga de Archivos
</h4>

<div>
    <form action="{{ route('archivo.store') }}" method='POST' enctype='multipart/form-data'>
        @csrf

        <label>
            <span>
                Seleccione el Archivo a Cargar
            </span>
            <input type="file" name="achivo" id="archivo">


        </label>
        <div>
            <button
                type="submit"
            >
            <span>Cargar</span>
            </button>
        </div>

    </form>
    <br>
    <hr>
</div>