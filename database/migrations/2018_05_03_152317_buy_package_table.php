<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuyPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_package_table', function (Blueprint $table) {
            
            $table->integer('parent_clint_id');
            //$table->foreign('parent_clint_id', 'fk_parent_clint_id_buy_package_table_parent_clint_list_table')->references('parent_clint_id')->on('parent_clint_list_table');
            $table->integer('package_id');
            //$table->foreign('package_id', 'fk_package_id_buy_package_table_package_list_table')->references('package_id')->on('package_list_table');
            $table->increments('transaction_id');
            $table->date('purchased_date');
            $table->date('expiry_date');
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('buy_package_table');
    }
}
