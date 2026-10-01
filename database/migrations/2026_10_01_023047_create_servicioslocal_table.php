<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicioslocal', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('telefono');
            $table->string('tipo_dispositivo');
            $table->integer('cantidad');
            $table->string('servicio');
            $table->decimal('precio', 8, 2);
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicioslocal');
    }
};