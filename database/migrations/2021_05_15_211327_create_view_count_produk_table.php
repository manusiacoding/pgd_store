<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateViewCountProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::statement("

        //     CREATE or REPLACE
        //         ALGORITHM = UNDEFINED
        //         SQL SECURITY DEFINER
        //     VIEW count_produk AS
        //     SELECT
        //         t.id,
        //         t.produk,
        //         COUNT(t.total) as total
        //     FROM (
        //         SELECT
        //             product.id as id,
        //             product.nama as produk,
        //             COUNT(user_has_layanans.produk_id)as total
        //         FROM user_has_layanans
        //         LEFT JOIN product ON user_has_layanans.produk_id = product.id
        //         GROUP BY produk_id
        //     ) t
        //     GROUP BY id

        // ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement("DROP VIEW count_produk");
    }
}
