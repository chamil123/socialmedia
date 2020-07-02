<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */

    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_name');
            $table->string('member_address');
            $table->string('member_mobilenumber');
            $table->string('member_email');
            $table->string('member_web');
            $table->string('member_description',500);
            $table->integer('status');
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
        Schema::dropIfExists('members');
    }
}
