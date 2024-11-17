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
        Schema::create('classes', function (Blueprint $table) {
            $table->id('class_id');
            $table->string('name');
            $table->integer('room_number');
            $table->enum('status',['on','off'])->default('on');
            $table->timestamps();

            // foreign Key
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('paper_id');

            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->foreign('paper_id')->references('paper_id')->on('papers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
