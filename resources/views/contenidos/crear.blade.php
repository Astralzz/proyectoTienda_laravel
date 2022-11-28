{{-- Clase o plantilla que heredamos --}}
@extends('index')

{{-- Seccion a poner con el id --}}
@section('crearID')
    <div class="align-self-center">

        <br>

        {{--
            {{}} es para insertar php en un blade
             @csrf es para una proteccion anti malware
        --}}

        {{-- Formulario --}}
        <form action="{{ route('crearProducto') }}" method="POST">
            @csrf

            {{-- Validaciones --}}
            {{-- si existe success --}}
            @if (session('success'))
                {{-- Mensaje de exito con el texto de success --}}
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <h2 for="basic-url" class="form-label">Crear nuevo producto</h2>


            {{-- Nombre y precio --}}
            <div class="input-group mb-3">
                {{-- Nombre del producto --}}
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" name="nombre" class="form-control" placeholder="" aria-label="nombre"
                    aria-describedby="basic-addon1">
                {{-- precio --}}
                <span class="input-group-text">precio</span>
                <input type="number" min="0" name="precio" class="form-control"
                    aria-label="Amount (to the nearest dollar)">
            </div>

            {{-- costo y cantidad --}}
            <div class="input-group mb-3">
                {{-- cantidad --}}
                <span class="input-group-text">Cantidad</span>
                <input type="number" name="cantidad" min="0" class="form-control"
                    aria-label="Amount (to the nearest dollar)">
                {{-- costo --}}
                <span class="input-group-text">costo</span>
                <input type="number" name="costo" min="0" class="form-control"
                    aria-label="Amount (to the nearest dollar)">
            </div>

            {{-- departamento y fecha de cadocidad --}}
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">departamento</label>
                <select name="departamento" class="form-select" id="inputGroupSelect01">
                    <option selected>GENERAL</option>
                    <option value="LACTEOS">LACTEOS</option>
                    <option value="BEBIDAS">BEBIDAS</option>
                    <option value="ENLATADOS">ENLATADOS</option>
                    <option value="BLANCOS">BLANCOS</option>
                    <option value="FERRETERIA">FERRETERIA</option>
                    <option value="JARDINERIA">JARDINERIA</option>
                    <option value="PINTURA">PINTURA</option>
                    <option value="PAPELERIA">PAPELERIA</option>
                </select>
                {{-- fecha de caducidad --}}
                <span class="input-group-text">caducidad</span>
                <input type="date" class="form-control" name="fecha_caducidad"
                    aria-label="Amount (to the nearest dollar)">
            </div>

            {{-- descripcion --}}
            <div class="input-group">
                <span class="input-group-text">descripcion</span>
                <textarea name="descripcion" class="form-control" aria-label="With textarea"></textarea>
            </div>

            <br>

            {{-- Boton de crear --}}
            <div style="width: 100%; text-align: center">
                <button type="submit" class="btn btn-outline-dark">crear producto</button>
            </div>

            <br>

            {{-- Recorremos --}}
            @foreach (['nombre', 'descripcion', 'cantidad', 'precio', 'stock', 'costo', 'fecha_caducidad', 'departamento'] as $item)
                {{-- Si ahi algun error en estod datos --}}
                @error($item)
                    {{-- Mensaje de exito con el texto por defecto --}}
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            @endforeach
        </form>
    </div>
@endsection
