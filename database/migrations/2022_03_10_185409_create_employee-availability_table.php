<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee-availabilities', function (Blueprint $table) {
            $table->id();
            $table->string('employee-name');
            $table->string('title');
            $table->string('office');
            $table->boolean('presence');
            $table->string('reason');
            $table->time('departure-time');
            $table->time('return-time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee-availabilities');
    }
};
