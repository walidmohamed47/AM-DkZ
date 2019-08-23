<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('customerID')->unsigned()->index();
            $table->foreign('customerID')->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('employeeID')->unsigned()->index()->nullable();
            $table->foreign('employeeID')->references('id')->on('users')->onDelete('cascade');

            $table->integer('money');
            /*
                1 -> user do transer
                2 -> employee scussess 
                3 -> employee filed 
            */
            $table->integer('type');
            $table->string('phone');
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
        Schema::dropIfExists('transfers');
    }
}
