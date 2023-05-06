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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('Catagory')->nullable();
            $table->string('Catagory_id')->nullable();
            $table->string('strar')->nullable();
            $table->string('trending')->nullable();
            $table->string('status')->nullable();
            $table->string('meta_Taitle')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('quantity')->nullable();
            $table->string('Price')->nullable();
            $table->string('Descrtiptton')->nullable();
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
        Schema::dropIfExists('products');
    }
};
