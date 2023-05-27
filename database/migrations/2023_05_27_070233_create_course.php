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
        Schema::create('course', function (Blueprint $table) {
            $table->id('cd_mk');
            $table->string('mk');

            $table->unsignedBigInteger('NIDN');
            $table->foreign('NIDN')->references('NIDN')->on('lecturer');

            $table->unsignedBigInteger('Id_room');
            $table->foreign('Id_room')->references('Id_room')->on('rooms');

            $table->unsignedBigInteger('id_jadwal');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('schedule');
            
            $table->string('plan_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
