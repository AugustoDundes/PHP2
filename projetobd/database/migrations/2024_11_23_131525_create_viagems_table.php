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
        Schema::create('viagems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('veiculo_id');
            $table->unsignedBigInteger('motorista_id');
            $table->unsignedBigInteger('rota_id');
            
            // Definindo as chaves estrangeiras
            $table->foreign('veiculo_id')
                  ->references('id')
                  ->on('veiculos')
                  ->onDelete('restrict');
                  
            $table->foreign('motorista_id')
                  ->references('id')
                  ->on('motoristas')
                  ->onDelete('restrict');
                  
            $table->foreign('rota_id')
                  ->references('id')
                  ->on('rotas')
                  ->onDelete('restrict');

            // Campo para a data do pedido
            $table->date('data_pedido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viagems');
    }
};
