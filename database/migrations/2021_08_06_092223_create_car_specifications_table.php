<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCarSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_specifications', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('condition')->nullable(true);
            $table->string('type')->nullable(true);
            $table->year('year')->nullable(true);
            $table->string('drive_type')->nullable(true);
            $table->string('transmission')->nullable(true);
            $table->string('fuel_type')->nullable(true);
            $table->integer('mileage')->nullable(true);
            $table->integer('engine_size')->nullable(true);
            $table->integer('cylinders')->nullable(true);
            $table->string('color')->nullable(true);
            $table->integer('door')->nullable(true);
            $table->text('vdo_link')->nullable(true);
            $table->text('location')->nullable(true);
            $table->integer('cid');
            
        });

        DB::statement("ALTER TABLE car_specifications ADD attachment MEDIUMBLOB NULL");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_specifications');
    }
}
