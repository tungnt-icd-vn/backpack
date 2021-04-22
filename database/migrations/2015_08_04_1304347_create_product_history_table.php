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
            $table->string('categories_products_id');
            $table->text('note');
            $table->string('image')->nullable();
            $table->string('files')->nullable();
            $table->integer('user_create')->nullable(); // gen auto
            $table->date('date_process');
            $table->enum('process_status', ['processing', 'done', 'cancel'])->default('done');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'INTERNAL'])->default('PUBLISHED');
            $table->nullableTimestamps();
            $table->softDeletes();
            //https://github.com/Laravel-Backpack/docs/blob/master/4.1/crud-fields.md datetime
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
