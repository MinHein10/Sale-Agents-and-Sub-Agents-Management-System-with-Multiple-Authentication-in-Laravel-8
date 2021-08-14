<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->boolean('is_package');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->enum('payment_methods', array('KBZ', 'Wave Money'));
            $table->string('payment_slip_images');
            $table->boolean('is_success');
            $table->timestamps();
            $table->foreign('agent_id')->references('id')->on('agents');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('package_id')->references('id')->on('packages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_orders');
    }
}
