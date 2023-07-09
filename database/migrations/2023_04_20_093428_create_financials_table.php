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
            $table->string('userId');
            $table->string('salaryType')->nullable();
            $table->string('payScale')->nullable();
            $table->string('accHolderName')->nullable();
            $table->string('accNumber')->nullable();
            $table->string('bankName')->nullable();
            $table->string('branch')->nullable();
            $table->string('branchCode')->nullable();
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
