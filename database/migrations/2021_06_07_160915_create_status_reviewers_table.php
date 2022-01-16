<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusReviewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_reviewers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Rev');
            $table->string('option')->default('Reviewer');
            $table->boolean('status');
            $table->foreign('id_Rev')->references('id')->on('users');
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
        Schema::dropIfExists('status_reviewers');
    }
}
