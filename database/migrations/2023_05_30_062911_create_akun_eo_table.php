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
        Schema::create('akuneo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('eoID', 30);
            $table->string('eoName', 30);
            $table->string('eoType', 30);
            $table->string('eoDomicile', 30);
            $table->string('eoContactPerson', 30);
            $table->string('eoEventCatagory', 30);
            $table->string('jenisAccountID', 30);
            $table->string('eoImage', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akuneo');
    }
};
