<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQualifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->string('class_type')->nullable();
            $table->string('qualification_type')->nullable();
            $table->string('license')->nullable();
            $table->string('DBS')->nullable();
            $table->string('Tutor_per_hour')->nullable();
            $table->string('subject')->nullable();
            $table->string('level')->nullable();
            $table->string('cv')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('qualifications');
    }
}
