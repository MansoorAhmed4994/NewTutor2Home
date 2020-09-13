<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookclass', function (Blueprint $table) {
            $table->id();
            $table->string('session_name')->nullable();
            $table->string('session_date')->nullable();
            $table->string('session_time')->nullable();
            $table->string('session_hours')->nullable();
            $table->longtext('description')->nullable();
            $table->string('amount')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('booker_id')->nullable();
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
        Schema::dropIfExists('bookclass');
    }
}
