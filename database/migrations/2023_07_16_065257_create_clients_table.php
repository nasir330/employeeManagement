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
            $table->string('clientId')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('nickName')->nullable();           
            $table->string('gender')->nullable();
            $table->string('address1')->nullable();
            $table->string('adddress2')->nullable();
            $table->string('townCity')->nullable();
            $table->string('postZipCode')->nullable();
            $table->string('stateProvision')->nullable();
            $table->string('country')->nullable();
            $table->string('phone1')->nullable();           
            $table->string('phone2')->nullable();
            $table->string('whatsappNo')->nullable();
            $table->string('dob')->nullable();
            $table->string('govId')->nullable();
            $table->string('govIdNo')->nullable();
            $table->string('licence')->nullable();
            $table->string('licenceNo')->nullable();
            $table->string('photo')->nullable();                
            $table->string('joinDate')->nullable();          
            $table->string('leaveDate')->nullable();
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
