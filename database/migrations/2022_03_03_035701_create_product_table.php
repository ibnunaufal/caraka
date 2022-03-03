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
            $table->string('code')->unique();
            $table->string('name', 50);
            $table->string('description', 50);
            $table->string('optionSize', 50);
            $table->string('size', 50);
            $table->string('material', 50);
            $table->string('finishing', 50);
            $table->string('packaging', 50);
            $table->string('idrPrice', 50);
            $table->string('usdPrice', 50);
            $table->string('fobPort', 50);
            $table->string('moq', 50);
            $table->string('leadTime', 50);
            $table->string('image', 50);
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
