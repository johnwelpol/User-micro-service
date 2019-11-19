<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_configurations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('driver');
            $table->string('host');
            $table->string('port');
            $table->string('database');
            $table->string('username');
            $table->string('password');
            $table->string('token');
        });

        Schema::create('tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token');
            $table->string('reset_token');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
