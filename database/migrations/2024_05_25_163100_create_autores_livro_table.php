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
        Schema::create('autores_livro', function (Blueprint $table) {
            $table->id();
            $table->integer('livros_Id');
            $table->integer('autores_Id');
            $table->timestamps();
            $table->foreign('livros_Id')->references('id')->on('livros')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('autores_Id')->references('id')->on('autores')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores_livro');
    }
};
