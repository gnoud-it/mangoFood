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
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->integer('price');            
            $table->timestamps();
        });
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
           
        //     $table->timestamps();
        // });
        
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('user_id');
 
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->timestamps();
        // });
        // Schema::create('items', function (Blueprint $table) {
        //     $table->id();
           
        //     $table->unsignedBigInteger('order_id');
        //     $table->unsignedBigInteger('product_id');
        //     $table->foreign('order_id')->references('id')->on('orders');
        //     $table->foreign('product_id')->references('id')->on('products');
        //     $table->timestamps();
        // });        
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
