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
            $table->increments('buy_package_id');
            $table->string('my_clint_id');
            $table->string('package_id');
            $table->string('transaction_id');
            $table->string('payment_method');
            $table->float('price');
            $table->string('running_status')->default(true);
            $table->string('expiry_date');
            
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
