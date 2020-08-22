<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
           $table->id();
            $table->date('depature_date');
            $table->string('voucherno');
            $table->tinyInteger('status')->default(0);
            $table->text('note');
            $table->integer('passenger');
            $table->integer('total');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
             $table->foreign('package_id')
                    ->references('id')
                    ->on('packages')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
