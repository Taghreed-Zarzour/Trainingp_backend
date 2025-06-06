<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('company_qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_advertisement_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_qualifications');
    }
}; 