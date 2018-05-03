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
            $table->integer('package_id');
            $table->increments('transaction_id');
            $table->date('purchased_date');
            $table->date('Expiry_date');
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
