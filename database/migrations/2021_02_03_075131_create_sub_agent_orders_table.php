<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubAgentOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_agent_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->unsignedBigInteger('subagent_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->boolean('is_package');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->enum('payment_methods', array('KBZ', 'Wave Money'));
            $table->string('payment_slip_images');
            $table->boolean('is_success');
            $table->foreign('subagent_id')->references('id')->on('sub_agents');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('package_id')->references('id')->on('packages');
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
        Schema::dropIfExists('sub_agent_orders');
    }
}
