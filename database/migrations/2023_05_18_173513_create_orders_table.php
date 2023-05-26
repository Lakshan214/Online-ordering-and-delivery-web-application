<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('ProductId')->nullable();
            $table->string('userName');
            $table->string('phone');
            $table->string('Price')->nullable();
            $table->string('City')->nullable();
            $table->string('Ltype')->nullable();
            $table->string('address')->nullable();
            $table->string('quntity')->nullable();
            $table->string('pmode')->nullable();
            $table->string('status')->nullable();
            $table->string('total')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
