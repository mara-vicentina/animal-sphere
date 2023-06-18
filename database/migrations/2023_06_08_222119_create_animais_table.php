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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('race');
            $table->boolean('sex');
            $table->boolean('castrated_animal');
            $table->date('birth_date');
            $table->foreignId('client_id')->constrained(
                table: 'clientes', indexName: 'animais_client_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
