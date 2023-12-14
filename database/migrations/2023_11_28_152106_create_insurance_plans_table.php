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
        Schema::create('insurance_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insurance_line_id'); // Clave foránea para la relación con los ramos
            $table->string('name');
            $table->text('description');
            $table->text('coverage');
            $table->decimal('price', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('insurance_line_id')->references('id')->on('insurance_lines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_plans');
    }
};
