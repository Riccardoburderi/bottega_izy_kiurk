<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->text('personal')->nullable();
            $table->unsignedBigInteger('animal_id');
            $table->boolean('regalo')->default(0)->nullable();
            $table->string('mittente')->nullable();
            $table->text('dedica')->nullable();
            $table->string('proprietario')->nullable();
            $table->string('image_big')->nullable();
            $table->date('venduto_giorno')->nullable();
            $table->timestamps();
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
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
