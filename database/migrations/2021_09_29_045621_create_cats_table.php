<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('size');
            $table->string('coat');
            $table->string('color');
            $table->text('temperament');
            $table->text('characteristics');
            $table->string('lifespan');
            $table->string('foods');
            $table->text('history');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
