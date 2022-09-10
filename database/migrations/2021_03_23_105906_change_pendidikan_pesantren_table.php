<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePendidikanPesantrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendidikan_pesantren', function (Blueprint $table) {
            $table->dropColumn('pendidikan');
        });

        Schema::table('pendidikan_pesantren', function (Blueprint $table) {
            $table->integer('pendidikan_id')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
