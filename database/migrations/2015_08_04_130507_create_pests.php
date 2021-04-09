<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pests', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('dangerous', ['high', 'medium', 'low'])->default('medium');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'INTERNAL'])->default('PUBLISHED');
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
        Schema::drop('pests');
    }
}
