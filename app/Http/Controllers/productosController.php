<?php

//Configurar lógica del programa
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

//Controlador de productos
class productosController extends Controller
{
    /*
    index -> mostrar
    store -> guardar
    update -> actualizar
    destroy -> eliminar
    edit -> mostrar formulario de edición
    */

    //Obtener tabla de productos
    public function index()
    {
        //Obtenemos lista
        $listaProductos = productos::all();

        //Retornamos datos como arreglo a la ruta de la tabla
        return view('contenidos.tabla', ['listaPro' => $listaProductos]);
    }

    //Guardar producto
    public function store(Request $request)
    {

        //Validamos los datos recibidos
        // required|min:3 => se necesita mínimo 3 caracteres
        $request->validate([
            'nombre' => 'required|min:3',
            'descripcion' => 'required|min:5',
            'cantidad' => 'required',
            'precio' => 'required',
            'costo' => 'required',
            'fecha_caducidad' => 'required',
            'departamento' => 'required',
        ]);

        //Creamos producto
        $producto = new productos();

        //Asignamos valores
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->stock = $request->cantidad;
        $producto->costo = $request->costo;
        $producto->fecha_caducidad = $request->fecha_caducidad;
        $producto->departamento = $request->departamento;


        //Guardamos
        $producto->save();

        //Redireccionamos y mandamos un mensaje con with
        return redirect()->route('crearProducto')->with('success', 'Éxito, el producto se guardo correctamente');
    }
}
