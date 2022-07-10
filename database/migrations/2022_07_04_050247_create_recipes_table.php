<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('author', 255)->nullable(true);
            $table->integer('calories')->nullable(true);
            $table->integer('carbohydrates')->nullable(true);
            $table->integer('protein')->nullable(true);
            $table->integer('fats')->nullable(true);
            $table->integer('cooking_time')->nullable(true);
            $table->string('male', 255)->nullable(true);
            $table->string('preview')->nullable(true);
            $table->text('description')->nullable(true);
            $table->boolean('is_published');
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
        Schema::dropIfExists('recipes');
    }
}
