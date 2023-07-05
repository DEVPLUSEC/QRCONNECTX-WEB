<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuni_tokens_acceso_personal', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('nombres');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('fecha_ultimo_uso')->nullable();
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
        Schema::dropIfExists('tokens_acceso_personal');
    }
}
