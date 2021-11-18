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
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year');
            $table->string('theme')->nullable();
            $table->text('theme_css')->nullable();
            $table->text('theme_js')->nullable();
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
