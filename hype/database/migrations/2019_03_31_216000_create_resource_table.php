<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource', function(Blueprint $table)
        {
            $table->increments('id')->autoIncrement();
            $table->string('title');
            $table->string('description');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('username');
            $table->unsignedBigInteger('month_year_id');
            $table->foreign('month_year_id')
                ->references('id')->on('month_year')
                ->onDelete('cascade');
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
