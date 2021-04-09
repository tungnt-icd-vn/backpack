<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFertilizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('supplier_code', 100);
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->date('date_fertilizers');
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
        Schema::dropIfExists('fertilizers');
    }
}
