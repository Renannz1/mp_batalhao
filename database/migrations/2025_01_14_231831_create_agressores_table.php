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
        Schema::create('agressores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255); 
            $table->integer('idade')->nullable(); 
            $table->string('telefone', 20)->nullable(); 
            $table->string('logradouro', 255); 
            $table->string('numero', 10)->nullable(); 
            $table->string('quadra', 50)->nullable(); 
            $table->string('bloco', 50)->nullable(); 
            $table->string('apartamento', 50)->nullable();
            $table->string('bairro', 255); 
            $table->string('complemento', 255)->nullable();
            $table->string('municipio', 255); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agressores');
    }
};
