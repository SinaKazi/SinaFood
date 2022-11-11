<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('restaurants_id');
            $table->foreign('restaurants_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('Category_id');
            $table->foreign('Category_id')->references('id')->on('Categories')->onDelete('cascade');
            $table->integer('price');
            $table->string('raw_material');
            $table->string('image');
            $table->integer('inventory')->default(0);
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
        Schema::dropIfExists('food');
    }
};
