<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price')->nullable();
            $table->text('recipe')->nullable();     //aggiunta di elementi nella ricetta (tipo colore)
            $table->string('code')->nullable();    //univoco per riconoscimento animale
            $table->string('birthday')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('subcategory_id');
            $table->boolean('venduto')->nullable();         
            $table->timestamps();

            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
