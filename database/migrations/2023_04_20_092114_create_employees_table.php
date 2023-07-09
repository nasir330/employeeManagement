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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('nickName')->nullable();
            $table->string('fathersName')->nullable();
            $table->string('gender')->nullable();
            $table->string('presentAddress')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('referenceName')->nullable();
            $table->string('referencePhone')->nullable();
            $table->string('govId')->nullable();           
            $table->string('govIdNo')->nullable();
            $table->string('photo')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('joinDate')->nullable();
            $table->string('leaveDate')->nullable();
            $table->string('status')->nullable();
            $table->string('shift')->nullable();
            $table->string('hiringManager')->nullable();          
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
        Schema::dropIfExists('employees');
    }
};
