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
            $table->string('eoID', 50);
            $table->string('eoName', 50);
            $table->string('eoType', 50);
            $table->string('eoDomicile', 50);
            $table->string('eoContactPerson', 50);
            $table->string('eoEventCatagory', 50);
            $table->string('jenisAccountID', 50);
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
