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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("photo");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("dob");
            $table->string("gender");
            $table->string("email");
            $table->string("password");
            $table->biginteger("mobile");
            $table->text("address");
            $table->integer("countryid")->unsigned();
            $table->foreign("countryid")->references("id")->on("countries");
            $table->integer("stateid")->unsigned();
            $table->foreign("stateid")->references("id")->on("states");
            $table->integer("cityid")->unsigned();
            $table->foreign("cityid")->references("id")->on("cities");
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
        Schema::dropIfExists('customers');
    }
};
