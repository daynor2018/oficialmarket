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
            $table->integer('department_id')->unsigned();
            $table->string('name');
            $table->string('paternal_last_name');
            $table->string('name_user');
            $table->string('image')->nullable();
            $table->string('cinit')->unique();      
            $table->string('email')->unique()->nullable();
            $table->date('birthdate');
            $table->char('genre',1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('department_id')->references('id')->on('departments');
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
        Schema::dropIfExists('users');
    }
}
