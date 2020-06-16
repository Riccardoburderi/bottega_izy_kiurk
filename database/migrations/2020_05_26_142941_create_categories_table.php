<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //categorie: volatili grandi, volatili piccoli,aracnidi, insetti, rettili, 
            //anfibi,primati,bovini+ovini, suini,canidi,cervidi,felini,molluschi,mustelidi, roditori
            $table->id();
            $table->string('name');
            $table->string('ricetta'); //ricetta di base
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
        //
    }
}
