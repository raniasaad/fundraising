<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pledges', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('one_time')->unsigned();
			$table->integer('monthly')->unsigned();
			$table->integer('duration')->unsigned();
            $table->string('start_date');
            $table->string('name_d');
            $table->string('email_d');
			$table->string('phone_d');
			$table->integer('direction1')->unsigned();
			$table->integer('direction2')->unsigned();
			$table->integer('direction3')->unsigned();
            $table->rememberToken();
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
        Schema::drop('pledges');
    }
}
