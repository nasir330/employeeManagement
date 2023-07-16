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
        Schema::create('financials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->unsigned()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('salaryType')->nullable();
            $table->string('payScale')->nullable();
            $table->string('bankName')->nullable();
            $table->string('accHolderName')->nullable();
            $table->string('accNumber')->nullable();
            $table->string('bankSortCode')->nullable();
            $table->string('bankRoutingCode')->nullable();
            $table->string('swiftCode')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('townCity')->nullable();
            $table->string('stateProvision')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('financials');
    }
};
