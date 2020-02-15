<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('image1', 100);
            $table->string('image2', 100)->nullable();
            $table->string('image3', 100)->nullable();
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('size')->onDelete('cascade');
            $table->text('description');
            $table->string('title', 200)->nullable();
            $table->string('content', 200)->nullable();
            $table->integer('price_unit');
            $table->integer('price_promotion');
            $table->unsignedBigInteger('info_id');
            $table->foreign('info_id')->references('id')->on('type_info')->onDelete('cascade');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_product')->onDelete('cascade');
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
}
