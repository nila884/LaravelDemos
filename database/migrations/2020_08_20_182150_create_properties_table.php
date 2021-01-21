<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('area');
            $table->smallInteger('rooms');
            $table->smallInteger('bedrooms');
            $table->smallInteger('bathrooms');
            $table->longText('description');
            $table->integer('price');
            $table->string('address');
            $table->string('city');
            $table->smallInteger('category');
            $table->boolean('available')->default(true);
            $table->smallInteger('type');
            $table->string('image');
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
        Schema::dropIfExists('properties');
    }
}
