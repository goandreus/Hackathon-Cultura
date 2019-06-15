<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('image');
            $table->string('fName');
            $table->string('lName');
            $table->string('gender');
            $table->bigInteger('pNumber')->unique();
            $table->bigInteger('pNumber2')->unique()->nullable();
            $table->bigInteger('pNumber3')->unique()->nullable();
            $table->bigInteger('pNumber4')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('email2')->unique()->nullable();
            $table->string('email3')->unique()->nullable();
            $table->string('job');
            $table->string('city');
            $table->text('about');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
