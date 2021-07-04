<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id(); // Campo chave primária
            $table->string('title', 16);
            $table->char('author', 24);
            $table->string('description', 58);
            $table->char('level', 2);
            $table->string('example', 50);
            $table->string('github', 50);
            $table->integer('discord');
            $table->timestamps(); //opcional e gerenciado pelo laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
}
