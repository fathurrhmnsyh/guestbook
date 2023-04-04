<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('from_time');
            $table->time('to_time');
            $table->string('name', 50);
            $table->string('from', 50);
            $table->string('identity_card', 50);
            $table->string('contact', 50);
            $table->string('meet_to', 50);
            $table->string('section', 50);
            $table->string('necessity', 200);
            $table->string('info', 250);
            $table->text('image');
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
        Schema::dropIfExists('tamu');
    }
}
