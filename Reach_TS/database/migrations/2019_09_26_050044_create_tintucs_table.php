<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tt_name')->nullable()->unique();
            $table->string('tt_slug')->index();
            $table->string('tt_description')->nullable();
            $table->integer('tt_loaitin_id')->index()->default(0);
            $table->integer('tt_user_id')->index()->default(0);
            $table->integer('tt_category_id')->index()->default(0);
            $table->longText('tt_content')->nullable();
            $table->tinyInteger('tt_active')->index()->default(1);
            $table->integer('tt_author_id')->index()->default(0);
            $table->string('tt_description_seo')->nullable();
            $table->string('tt_title_seo')->nullable();
            $table->string('tt_avatar')->nullable();
            $table->integer('tt_view')->default(0);
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
        Schema::dropIfExists('tintucs');
    }
}
