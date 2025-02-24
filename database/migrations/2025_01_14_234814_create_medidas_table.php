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
        Schema::create('medidas', function (Blueprint $table) {
             $table->id(); // ID único para cada medida protetiva
            $table->string('processo_sei', 50)->unique(); // Número único do processo SEI
            $table->string('medida_protetiva', 50)->unique(); // Número do processo da medida protetiva
            $table->unsignedBigInteger('assistida_id'); // Relacionamento com a tabela assistida
            $table->string('situacao', 50); // Situação da medida protetiva
            $table->string('nivel_risco', 50); // Nível de risco da assistida
            $table->unsignedBigInteger('agressor_id'); // Relacionamento com a tabela agressor
            $table->string('relacao_vitima_agressor', 100); // Tipo de relação (ex: cônjuge, ex-parceiro)
            $table->text('restricoes_agressor')->nullable(); // Restrições impostas ao agressor (opcional)
            $table->date('inicio'); // Data de início da medida protetiva
            $table->date('previsao_termino')->nullable(); // Data prevista para o término (opcional)
            $table->date('renovacao')->nullable(); // Data de renovação da medida protetiva (opcional)
            $table->date('revogacao')->nullable(); // Data de revogação, se aplicável (opcional)
            $table->timestamps(); // Campos created_at e updated_at
            $table->softDeletes();
            
            // Definindo as chaves estrangeiras
            $table->foreign('assistida_id')->references('id')->on('assistidas')->onDelete('restrict');
            $table->foreign('agressor_id')->references('id')->on('agressores')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medidas');
    }
};
