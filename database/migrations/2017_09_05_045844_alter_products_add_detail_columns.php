<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsAddDetailColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('features')->nullable()->after('free_from');
            $table->text('clinical_trials')->nullable()->after('features');
            $table->text('education')->nullable()->after('clinical_trials');
            $table->text('productfaq')->nullable()->after('education');
            $table->text('conditions_associated')->nullable()->after('productfaq');
            $table->text('additional_resources')->nullable()->after('conditions_associated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('features');
            $table->dropColumn('clinical_trials');
            $table->dropColumn('education');
            $table->dropColumn('productfaq');
            $table->dropColumn('conditions_associated');
            $table->dropColumn('additional_resources');
        });
    }
}
