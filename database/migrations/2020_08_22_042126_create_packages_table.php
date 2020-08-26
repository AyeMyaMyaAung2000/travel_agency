<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->integer('price');
            $table->integer('duration_time');
            $table->longText('description');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('hotel_id')
                        ->references('id')
                        ->on('hotels')
                        ->onDelete('cascade');
            $table->foreign('car_id')
                        ->references('id')
                        ->on('cars')
                        ->onDelete('cascade');
             $table->foreign('category_id')
                        ->references('id')
                        ->on('categories')
                        ->onDelete('cascade');

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
        Schema::dropIfExists('packages');
    }
}
