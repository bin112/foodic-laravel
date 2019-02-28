<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturants', function (Blueprint $table) {
            $table->increments('id');
             $table->string('Subject')->nullable();
            $table->string('phone')->nullable();
            $table->string('url')->nullable();
             $table->string('Email_address')->nullable();
            $table->string('Open_Hours')->nullable();
            $table->string('Closing_Hourses')->nullable();
           $table->string('Open_days')->nullable();
           $table->string('File_input')->nullable();
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
        Schema::dropIfExists('resturants');
    }
}
