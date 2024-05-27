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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->integer('usuarios_id');
            $table->integer('livros_id');
            $table->dateTime('data_emprestimo');
            $table->dateTime('data_devolucao');
            $table->timestamps();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('livros_id')->references('id')->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
