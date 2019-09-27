<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaitinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lt_name')->nullable();
            $table->string('lt_slug')->index();
            $table->integer('lt_category_id')->index()->default(0);
            $table->integer('lt_author_id')->default(0)->index();
            $table->tinyInteger('lt_active')->default(1)->index();
            $table->tinyInteger('lt_hot')->default(0);
            $table->integer('lt_view')->default(0);
            $table->string('lt_description')->nullable();
            $table->string('lt_avatar')->nullable();
            $table->string('lt_description_seo')->nullable();
            $table->string('lt_title_seo')->nullable();
            $table->string('lt_content')->nullable();
            $table->string('lt_keyword_seo')->nullable();   
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
        Schema::dropIfExists('loaitins');
    }
}
