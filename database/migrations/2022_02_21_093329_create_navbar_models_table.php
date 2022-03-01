<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbar_models', function (Blueprint $table) {
            $table->id();
            $table->text('item');
            $table->text('itemlink');
            $table->text('logo');
            $table->text('logolink');
            $table->text('btnnvbr');
            $table->text('btnlink');
            $table->text('icon');
            $table->text('iconlink');
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
        Schema::dropIfExists('navbar_models');
    }
}
