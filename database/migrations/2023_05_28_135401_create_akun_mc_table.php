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
        Schema::create('akunMC', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mcID', 50);
            $table->string('mcUsername', 12);
            $table->string('mcFullName', 50);
            $table->string('mcPhone', 20);
            $table->string('jenisAccountID', 30);
            $table->dateTime('mcDOB');
            $table->string('mcLanguage', 50);
            $table->string('mcPriceMin', 50);
            $table->string('mcPriceMax', 50);
            $table->string('mcCity', 50);
            $table->string('mcSpecialization', 50);
            $table->string('mcExperience', 500);
            $table->string('ratingMCID', 50);
            $table->string('mcImage', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akunmc');
    }
};
