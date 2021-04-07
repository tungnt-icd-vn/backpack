<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zones_code', 20);
            $table->string('farms_code', 50);
            $table->string('title', 191);
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
            $table->nullableTimestamps();
            $table->softDeletes();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('zones');
    }
}
