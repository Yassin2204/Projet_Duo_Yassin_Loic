<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_statics', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("p1");
            $table->string("p2");
            $table->string("sous_titre");
            $table->mediumText("p3");
            $table->string("href");
            $table->string("sous_titre2");
            $table->string("p4");
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
        Schema::dropIfExists('home_statics');
    }
}
