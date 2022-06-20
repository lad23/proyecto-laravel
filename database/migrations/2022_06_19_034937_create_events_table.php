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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('category_id')->constrained('categories'); METODO CORTO PARA RELACIONAR

            $table->unsignedBigInteger('category_id');
            $table->string('title', 80);
            $table->string('featured');
            $table->date('date_event');
            $table->string('name_event');
            $table->longText('description')->nullable();
            $table->boolean('is_banner')->default(0);
            $table->boolean('status')->default(1);
            //relacionando tabla con categorias
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('events');
    }
};
