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
        Schema::create('addtocarts', function (Blueprint $table) {
            $table->increments("id");
            $table->string("productname");
            $table->string("productprice");
            $table->string("productqty");
            $table->string("totalprice");
            $table->string("paymentmethod");
            $table->integer("productid")->unsigned();
            $table->foreign("productid")->references("id")->on("products");
            $table->integer("customerid")->unsigned();
            $table->foreign("customerid")->references("id")->on("customers");
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
        Schema::dropIfExists('addtocarts');
    }
};
