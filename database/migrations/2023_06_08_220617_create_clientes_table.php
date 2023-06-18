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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('cpf')->unique();
            $table->string('cep');
            $table->string('street');
            $table->integer('number');
            $table->string('complement');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'clientes_user_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
