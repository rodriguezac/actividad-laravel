<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); // id como PK
            $table->string('producto');
            $table->integer('cantidad');
            $table->decimal('total', 8, 2); // total con 2 decimales
            $table->unsignedBigInteger('id_usuario'); // FK
            $table->timestamps();

            // Clave foránea
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
