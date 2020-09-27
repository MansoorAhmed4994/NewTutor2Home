<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_details', function (Blueprint $table) {
            $table->id();
            $table->string('class_id')->nullable();
            $table->string('uuid')->nullable();
            $table->string('metting_id')->nullable();
            $table->string('host_id')->nullable();
            $table->string('host_email')->nullable();
            $table->string('topic')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('start_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('timezone')->nullable();
            $table->string('created_at_metting')->nullable();
            $table->longtext('start_url')->nullable();
            $table->longtext('join_url')->nullable();
            $table->longtext('password')->nullable();
            $table->longtext('h323_password')->nullable();
            $table->longtext('pstn_password')->nullable();
            $table->longtext('encrypted_password')->nullable();
            $table->string('code')->nullable();
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
        Schema::dropIfExists('meeting_details');
    }
}
