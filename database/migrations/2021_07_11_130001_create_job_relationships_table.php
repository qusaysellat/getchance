<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_relationships', function (Blueprint $table) {
            $table->id();
            $table->date('start')->nullable();
            $table->date('finish')->nullable();
            $table->boolean('approved')->default(false);
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('job_position_id');
            $table->foreign('job_position_id')->references('id')->on('job_positions')->onDelete('cascade');
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
        Schema::dropIfExists('job_relationships');
    }
}
