<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_products', function (Blueprint $table) {
          
            $table->foreignId("product_id")->constrained()->onDelete("cascade");
            $table->foreignId("cart_id")->constrained()->onDelete("cascade");
            $table->integer("quantity")->default(0);
            $table->timestamps();
            $table->primary(["cart_id","product_id"]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_products');
    }
}
