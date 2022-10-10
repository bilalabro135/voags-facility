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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('requested_by');
            $table->string('account');
            $table->string('purchase_approved');
            $table->string('transferred_account_future');
            $table->string('vendor');
            $table->string('quote_no');
            $table->string('address');
            $table->string('contact_person');
            $table->string('phone_number');
            $table->string('fax_no');
            $table->string('shipping_cost');
            $table->string('other_charges');
            $table->string('total_charges');
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
        Schema::dropIfExists('purchase_orders');
    }
};
