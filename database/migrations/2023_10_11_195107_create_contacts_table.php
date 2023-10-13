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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nome_de_contato', 55);
            $table->string('email_de_contato', 55);
            $table->string('telefone_de_contato', 18);
            $table->string('CEP', 9);
            $table->string('estado', 100);
            $table->string('cidade', 150);
            $table->string('bairro', 150);
            $table->string('endereco', 150);
            $table->string('numero', 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
