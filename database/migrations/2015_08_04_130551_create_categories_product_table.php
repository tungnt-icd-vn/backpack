<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trees_code');
            $table->integer('farms_code');
            $table->integer('zones_code');
            // $table->integer('beds_code');
            $table->integer('users_code');
            $table->string('categories_products_code');
            $table->string('tittle');
            $table->date('date_start');
            $table->date('date_end');
            $table->enum('status', ['plan', 'planting', 'harvested', 'cancel' ])->default('plan');
            $table->timestamps();
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
        Schema::drop('categories_products');
    }
}
