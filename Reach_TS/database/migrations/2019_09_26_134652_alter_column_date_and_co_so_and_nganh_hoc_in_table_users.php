<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnDateAndCoSoAndNganhHocInTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('co_so')->nullable();
            $table->string('nganh_hoc')->nullable();
            $table->char('date')->nullable();   
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('co_so');
            $table->dropColumn('nganh_hoc');
            $table->dropColumn('date');
        });
    }
}
