<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('subject_id');
            $table->integer('user_id');
//            $table->enum('mark', ['1,0', '1,5', '1,75', '2,0', '2,5', '2,75', '3,0', '3,5', '3,75', '4,0', '4,5', '4,75', '5,0',
//                '5,5', '5,75', '6,0'])->nullable();
            $table->float('mark');

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
        Schema::dropIfExists('subject_user');
    }
}
