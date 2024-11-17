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
        Schema::create('papers', function (Blueprint $table) {
            $table->id('paper_id');
            $table->string('paper_name');
            $table->string('paper_code')->unique();
            $table->integer('lectures');
            $table->integer('credits');
            $table->integer('IA_masks'); // Internal Assessment marks
            $table->integer('ESE_masks'); // End Semester Examination marks

            // foreign key
            $table->unsignedBigInteger('semester_id');
            $table->foreign('semester_id')->references('semester_id')->on('semesters');


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
        Schema::dropIfExists('papers');
    }
};
