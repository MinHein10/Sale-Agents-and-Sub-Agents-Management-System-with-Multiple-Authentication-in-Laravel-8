<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('agent_id');
            $table->string('township');
            $table->string('region');
            $table->string('phno');
            $table->longtext('address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('agent_id')->references('id')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_agents');
    }
}
