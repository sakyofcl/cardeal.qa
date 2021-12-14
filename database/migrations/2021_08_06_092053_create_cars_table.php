<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->integer('cid')->autoIncrement();
            $table->integer('uid');
            $table->string('name');
            $table->integer('price');
            $table->integer('brand');
            $table->integer('model');
            $table->text('description')->nullable(true);
            $table->binary('image');
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('contact')->default('0XXXXXXXXX')->nullable(true);
            $table->string('contact_name')->default('unknown')->nullable(true);
            $table->string('status')->default('active')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
