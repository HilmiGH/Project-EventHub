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
            $table->string('eoID', 100);
            $table->string('eoName', 100);
            $table->string('eoType', 100);
            $table->string('eoDomicile', 100);
            $table->string('eoContactPerson', 100);
            $table->string('eoEventCatagory', 100);
            $table->string('jenisAccountID', 100);
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
