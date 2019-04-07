<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


// i called it resource by mistake, it is really report
class CreateResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function(Blueprint $table)
        {
            $table->increments('id')->autoIncrement();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('description2')->nullable();
            $table->string('color')->nullable();
            $table->string('fill_color')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
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
