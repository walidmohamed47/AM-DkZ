<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('customerID')->unsigned()->index();
            $table->foreign('customerID')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('adminID')->unsigned()->index();
            $table->foreign('adminID')->references('id')->on('users')->onDelete('cascade');

            $table->integer('money');
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
        Schema::dropIfExists('money');
    }
}
