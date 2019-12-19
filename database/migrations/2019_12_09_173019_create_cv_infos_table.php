<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cv_id');
            $table->string('title')->nullable();
            $table->string('jobPurpose')->nullable();
            $table->string('email')->nullable();
            $table->string('fullname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('cv_infos');
    }
}
