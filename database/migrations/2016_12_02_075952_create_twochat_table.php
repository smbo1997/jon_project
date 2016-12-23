<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwochatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twochat', function (Blueprint $table) {
            $table->increments('id');
            $table->text('msg');
            $table->integer('chack');
            $table->integer('user_id');
            $table->string('user_id_new');
            $table->integer('status');
            $table->integer('notification');
            $table->string('img');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('twochat');
    }
}
