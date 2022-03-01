<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_models', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();  
            $table->text('email');  
            $table->text('iconemail');
            $table->text('instagram');
            $table->text('iconinstagram');
            $table->text('whatsapp');
            $table->text('iconwhatsapp');
            $table->text('shopee');
            $table->text('iconshopee');
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
        Schema::dropIfExists('contact_models');
    }
}
