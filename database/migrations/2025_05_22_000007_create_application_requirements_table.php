<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('application_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_advertisement_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_requirements');
    }
}; 