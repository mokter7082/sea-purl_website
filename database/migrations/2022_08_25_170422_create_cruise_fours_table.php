<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCruiseFoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise_fours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cabin_type');
            $table->string('bed_type'); 
            $table->integer('cabin_qty'); 
            $table->string('image'); 
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); 
            $table->integer('created_by')->nullable(true); 
            $table->integer('updated_by')->nullable(true);  
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
        Schema::dropIfExists('cruise_fours');
    }
}
