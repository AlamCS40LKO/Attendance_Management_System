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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('enrollment_number', 50)->unique()->nullable(); 
            $table->string('registration_number', 50)->unique()->nullable();
            $table->string('first_name', 55)->nullable();
            $table->string('middle_name', 55)->nullable();
            $table->string('last_name', 55)->nullable();
            $table->string('email',50);
            $table->string('phone_number',15)->nullable(); 
            $table->date('dob')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->enum('program', ['BCA', 'MCA'])->nullable();
            $table->date('admission_date')->nullable();
            $table->enum('admission_type', ['Regular', 'Self_finance'])->nullable();
            $table->string('country',30)->nullable();
            $table->string('state',30)->nullable();
            $table->string('city',30)->nullable();
            $table->text('address',60)->nullable();
            $table->unsignedInteger('pin_code')->nullable(); 
            $table->string('password')->nullable();
            $table->boolean('is_verify')->default(0); 
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->string('verification_code')->default('');
          
            
          
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
