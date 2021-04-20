<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_history', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('categories_products_id')->unsigned();
            $table->text('note');
            $table->string('image')->nullable();
            $table->integer('user_create')->nullable(); // gen auto
            $table->enum('process_status', ['processing', 'done', 'cancel'])->default('done');
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
        Schema::drop('product_history');
    }
}
