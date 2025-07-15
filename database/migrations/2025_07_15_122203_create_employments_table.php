<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained()->onDelete('cascade');
            $table->string('company');
            $table->string('position');
            $table->year('year_from');
            $table->year('year_to');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};
