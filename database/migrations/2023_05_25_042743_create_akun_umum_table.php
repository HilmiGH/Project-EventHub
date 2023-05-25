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
            $table->string('jenisAccountID', 10);
            $table->string('umumID', 50);
            $table->string('umumUsername', 50);
            $table->string('umumFullName', 50);
            $table->integer('umumPhone', 15);
            $table->string('umumCity', 50);
            $table->dateTime('umumDOB');
            $table->binary('umumPhoto');
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
