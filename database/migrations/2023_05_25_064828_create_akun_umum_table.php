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
        Schema::create('akunUmum', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenisAccountID', 30);
            $table->string('umumID', 50);
            $table->string('umumUsername', 12);
            $table->string('umumFullName', 50);
            $table->string('umumPhone', 20);
            $table->string('umumCity', 50);
            $table->dateTime('umumDOB');
            //ubah jadi string/varchar yg mengarah ke link storing foto
            $table->string('umumPhoto', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akunUmum');
    }
};
