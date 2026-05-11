<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('date_range');
            $table->integer('max_participants')->default(0);
            $table->integer('registered_count')->default(0);
            $table->enum('status', ['Open', 'Almost Full', 'Closed', 'Ongoing', 'Completed', 'Cancelled'])->default('Open');
            $table->string('type')->default('Competition'); // Competition, Community Ride, Training, Festival
            $table->string('icon')->default('fa-bicycle');
            $table->string('color')->default('success'); // success, warning, danger, info
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
        Schema::dropIfExists('events');
    }
}
