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
        Schema::create('pavadavimas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('truck_id');
            $table->unsignedBigInteger('subUnit');
            $table->dateTimeTz('start_date');
            $table->dateTimeTz('end_date');
            $table->foreign('truck_id')->references('id')->on('trucks');
            $table->foreign('subUnit')->references('id')->on('trucks');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pavadavimas');
    }
};
