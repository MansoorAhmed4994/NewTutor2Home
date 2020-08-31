<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddColumnForTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('postal_code')->after('gender')->nullable();
            $table->string('country')->after('postal_code')->nullable();
            $table->string('state')->after('country')->nullable();
            $table->string('city')->after('state')->nullable();
            $table->string('nationality')->after('city')->nullable();
            $table->longtext('description')->after('nationality')->nullable();
            $table->string('experience')->after('description')->nullable();
            $table->string('here_of_us')->after('experience')->nullable();
            $table->string('work_in_uk')->after('here_of_us')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
