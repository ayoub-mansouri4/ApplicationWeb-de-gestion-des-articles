<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name_id')->unique();
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('id_user');
            $table->boolean('status');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('articales');
    }
}
