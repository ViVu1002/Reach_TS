<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('s_name')->unique();
            $table->string('s_avatar')->nullable();
            $table->string('s_slug')->index();
            $table->timestamps();
        });
    }

     function down()
    {
        Schema::dropIfExists('slides');
    }
}
