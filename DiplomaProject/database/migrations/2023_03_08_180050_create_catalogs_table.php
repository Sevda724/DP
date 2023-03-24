<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Category')->nullable();
            $table->string('Title')->nullable();
            $table->text('Description')->nullable();
            $table->text('Text')->nullable();
            $table->string('Photo')->nullable();
            $table->integer('Year')->nullable();
            $table->string('Director')->nullable();
            $table->string('Trailer')->nullable();
            $table->string('Awards')->nullable();
            $table->string('Title_ru')->nullable();
            $table->text('Text_ru')->nullable();
            $table->string('Director_ru')->nullable();
            $table->string('Awards_ru')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
};
