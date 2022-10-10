<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_purchases', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('purchase_id');
            $table->string('stock');
            $table->string('qty');
            $table->string('unit_price');
            $table->string('total_cost');
            $table->longText('description');
              $table->foreignId('purchase_id')->references('id')->on('purchase_orders')->onDelete('cascade');
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
        Schema::dropIfExists('other_purchases');
    }
};
