<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('setting_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('order_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('order_status')->nullable();
            $table->integer('total_products')->nullable();
            $table->float('sub_total')->nullable();
            $table->float('vat')->nullable();
            $table->float('total')->nullable();
            $table->string('payment_status')->nullable();
            $table->float('pay')->nullable();
            $table->float('return')->nullable();
            $table->float('due')->nullable();
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
