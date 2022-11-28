{{-- Clase o plantilla que heredamos --}}
@extends('index')

{{-- Seccion a poner con el id --}}
@section('tablaID')
    <!-- Tabla -->
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio venta</th>
                <th scope="col">Precio compra</th>
                <th scope="col">Departamento</th>
                <th scope="col">Cadocidad</th>
                <th scope="col">Stock</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            {{-- Recorremos --}}
            @php
                $n = 1
            @endphp
            @foreach ($listaPro as $producto)
                <tr>
                    {{-- producto --}}
                    <th scope="row"> {{{$n}}} </th>
                    <td>{{{$producto->nombre}}}</td>
                    <td>{{{$producto->precio}}}</td>
                    <td>{{{$producto->costo}}}</td>
                    <td>{{{$producto->departamento}}}</td>
                    <td>{{{$producto->fecha_caducidad}}}</td>
                    <td>{{{$producto->stock}}}</td>
                    <td>{{{$producto->descripcion}}}</td>
                </tr>

                @php
                $n++;
                @endphp

            @endforeach
        </tbody>
    </table>
@endsection
