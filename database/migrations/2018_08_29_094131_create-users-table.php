<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('username')->unique();
            $table->integer('status')->offsetSet('default', 1);
            $table->integer('level_id')->offsetSet('default', 5);
            $table->timestamps();

        });
    }



    public function down()
    {
        Schema::dropIfExists('users');
    }
}
