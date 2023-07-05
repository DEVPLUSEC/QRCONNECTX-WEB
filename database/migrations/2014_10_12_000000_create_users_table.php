<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuni_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->timestamp('fecha_verificacion_correo')->nullable();
            $table->string('password');
            $table->rememberToken('recordar_token');
            $table->string('telefono');
            $table->text('direccion');
            $table->integer('genero');
            $table->date('fecha_nacimiento');
            $table->integer('provincia');
            $table->integer('canton');
            $table->integer('tipo_usuario');
            $table->string('estado');
            $table->text('imagen_perfil');
            $table->integer('empresa');
            $table->timestamp('fecha_creacion');
            $table->timestamp('fecha_actualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
