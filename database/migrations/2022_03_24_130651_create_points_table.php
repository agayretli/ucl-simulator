<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('group');
            $table->integer('points')->unsigned()->default(0);
            $table->integer('won')->unsigned()->default(0);
            $table->integer('drawn')->unsigned()->default(0);
            $table->integer('lost')->unsigned()->default(0);
            $table->integer('goal_difference')->default(0);
            $table->integer('prediction')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
};
