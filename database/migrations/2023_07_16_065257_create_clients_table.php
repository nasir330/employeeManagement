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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->unsigned()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('firstName')->nullable();           
            $table->string('lastName')->nullable();
            $table->string('nickName')->nullable();
            $table->string('fathersName')->nullable();          
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();

            $table->string('phone1')->nullable();           
            $table->string('phone2')->nullable();
            $table->string('whatsappNo')->nullable();
            $table->string('referenceName')->nullable();
            $table->string('referencePhone')->nullable();

            $table->string('govId')->nullable();
            $table->string('govIdNo')->nullable();           
            $table->string('photo')->nullable();                
            
            $table->string('address1')->nullable();           
            $table->string('townCity1')->nullable();
            $table->string('postZipCode1')->nullable();
            $table->string('state1')->nullable();
            $table->string('country1')->nullable();

            $table->string('address2')->nullable();           
            $table->string('townCity2')->nullable();
            $table->string('postZipCode2')->nullable();
            $table->string('state2')->nullable();
            $table->string('country2')->nullable();

            // $table->string('department')->nullable();
            // $table->string('designation')->nullable();          
            // $table->string('salaryType')->nullable();          
            // $table->string('payScale')->nullable();          
            $table->string('joinDate')->nullable();          
            $table->string('leaveDate')->nullable();          
            $table->string('status')->nullable();          
            // $table->string('shift')->nullable();          
            // $table->string('hiringManager')->nullable();             
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
        Schema::dropIfExists('clients');
    }
};