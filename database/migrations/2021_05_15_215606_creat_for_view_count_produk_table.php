<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatForViewCountProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::statement("

        //     CREATE VIEW count_produk
        //     AS
        //     SELECT product.id AS id,product.nama AS produk, COUNT(user_has_layanans.produk_id)AS Total FROM user_has_layanans INNER JOIN product ON user_has_layanans.produk_id = product.id GROUP BY produk_id

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
