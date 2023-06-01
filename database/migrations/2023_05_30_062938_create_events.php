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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('eventID', 30);
            $table->string('eoID', 30);
            $table->string('eventName', 200);
            $table->string('eventType', 30);
            $table->string('eventLocation', 100);
            $table->dateTime('eventDate');
            $table->string('numberOfMC', 30);
            $table->string('eventDescription', 500);
            $table->string('eventImage', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
