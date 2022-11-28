<?php

//Migración de tabla productos
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    //up => crear
    public function up()
    {
        //tabla de productos
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_art'); //id
            $table->string('nombre', 250); //Nombre + ->unique() (único en la tabla)
            $table->string('descripcion', 300); //Descripción
            $table->integer('cantidad');
            $table->double('precio');
            $table->integer('stock');
            $table->double('costo');
            $table->date('fecha_caducidad');
            $table->enum('departamento', array('LACTEOS', 'BEBIDAS', 'ENLATADOS', 'BLANCOS', 'FERRETERIA', 'JARDINERIA', 'PINTURA', 'PAPELERIA', 'GENERAL'));
            $table->timestamps(); //Creación y actualización ... OBLIGATORIO
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //down => Eliminar
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
