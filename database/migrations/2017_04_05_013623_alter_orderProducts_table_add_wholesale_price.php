<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOrderProductsTableAddWholesalePrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderedProducts', function (Blueprint $table)
        {
            $table->double('price_wholesale')->nullable()->after('discounted_price');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderedProducts', function (Blueprint $table)
        {
            $table->dropColumn('price_wholesale');
        });

    }
}
