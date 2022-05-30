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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_product');
            $table->integer('qtd_product');
            $table->string('model');
            $table->string('brand');
            $table->string('size');
            $table->float('price');
            $table->string('description_product');
            $table->integer('cod_category');
            $table->string('sector');
            $table->string('description_category');
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
        Schema::dropIfExists('product');
    }
};
