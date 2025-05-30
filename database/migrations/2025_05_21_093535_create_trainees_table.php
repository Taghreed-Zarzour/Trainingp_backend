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
        Schema::create('trainees', function (Blueprint $table) {
            $table->unsignedBigInteger('id');

            $table->string('last_name');

            $table->enum('sex', ['ذكر', 'أنثى']);

            $table->unsignedBigInteger('nationality_id');

            $table->foreign('nationality_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('fields_of_work_id')
            ->constrained('fields_of_work')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreignId('education_levels_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainees');
    }
};
