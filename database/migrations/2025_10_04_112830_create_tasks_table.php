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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable()->comment('Название');
            $table->string('description', 255)->nullable()->comment('Описание');
			$table->enum('status', ['pending', 'created', 'progress', 'suspended', 'completed', 'returned', 'canceled'])->default('pending')->comment('Состояние');
            $table->comment('Задачи');
			$table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
