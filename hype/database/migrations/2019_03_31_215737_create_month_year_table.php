<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_year', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->integer('month');
            $table->integer('year');
            $table->string('theme');
            $table->text('theme_css');
            $table->text('theme_js');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('month_year');
    }
}
