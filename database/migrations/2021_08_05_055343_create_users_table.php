<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('uid')->autoIncrement();
            $table->string('name')->default('user')->nullable(true);
            $table->string('email')->nullable(false)->unique();
            $table->text('password')->nullable(false);
            $table->integer('phone')->nullable(true);
            $table->string('role')->default('root')->nullable(false);
            $table->string('verified')->default('0')->nullable(false);
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        DB::statement("ALTER TABLE users ADD image MEDIUMBLOB NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
