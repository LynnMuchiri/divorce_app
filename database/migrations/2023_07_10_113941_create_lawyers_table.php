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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->default('');
            $table->string('profile_photo')->nullable();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('specialization');
            $table->bigInteger('experience'); // Change the data type to bigInteger
            $table->string('license')->default('');
            $table->integer('cases_won')->default(0); // Set a default value
            $table->integer('password');
            $table->integer('phone_number');
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
        Schema::dropIfExists('lawyers');
    }
};
