<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_statics', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("sous_titre");
            $table->string("p1");
            $table->string("li1");
            $table->string("li2");
            $table->string("li3");
            $table->string("li4");
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
        Schema::dropIfExists('contact_statics');
    }
}
