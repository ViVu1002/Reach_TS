<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cmt_name')->nullable();
            $table->string('cmt_slug')->index();
            $table->integer('cmt_tintuc_id')->index()->default(0);
            $table->integer('cmt_user_id')->index()->default(0);
            $table->longText('cmt_content')->nullable();
            $table->string('cmt_avatar')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
