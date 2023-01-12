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
        Schema::create('cities', function (Blueprint $table) {
            $table->increments("id");
            $table->string("cityname");
            $table->integer("countryid")->unsigned();
            $table->foreign("countryid")->references("id")->on("countries");
            $table->integer("stateid")->unsigned();
            $table->foreign("stateid")->references("id")->on("states");
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
        Schema::dropIfExists('cities');
    }
};
