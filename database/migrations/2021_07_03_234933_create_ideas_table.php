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
            $table->string('title', 25);
            $table->char('author', 25);
            $table->mediumText('description');
            $table->char('level', 2);
            $table->string('example');
            $table->string('github');
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
