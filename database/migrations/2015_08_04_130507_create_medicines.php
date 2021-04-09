<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('supplier_code', 100);
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->date('date_medicines');
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
        Schema::drop('medicines');
    }
}
