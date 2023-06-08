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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('tipo');
            $table->string('endereco');
            $table->text('imagens');
            $table->string('proprietario');
            $table->boolean('garagem');
            $table->decimal('valor_condominio', 8, 2);
            $table->decimal('iptu', 8, 2);
            $table->decimal('metros_quadrados', 8, 2);
            $table->integer('quantidade_banheiros');
            $table->boolean('aceita_pets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
