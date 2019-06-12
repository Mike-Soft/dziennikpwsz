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
            $table->Increments('id');
            $table->string('name');
            $table->string('surname')->default('');
            $table->string('email')->unique();
            $table->enum('role', ['student', 'teacher', 'admin'  ])->default('student');
            $table->string('class')->default('')->nullable();
            $table->string('parentmail')->default('')->nullable();
            $table->string('password');
            $table->integer('clas_id')->nullable();
            $table->rememberToken();

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
