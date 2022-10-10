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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('service_id');
            $table->string('title');
            $table->string('nte');
            $table->string('hourly_rate');
            $table->string('rate_details');
            $table->string('type');
            $table->string('link');
            $table->string('quantity');
            $table->string('unit_cost');
            $table->text('address');
            $table->text('job_requirement');
            $table->text('scrop_work');
            
        
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
        Schema::dropIfExists('jobs');
    }
};
