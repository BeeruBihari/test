<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackageListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_list_table', function (Blueprint $table) {
            $table->increments('Package_id');
            $table->string('Package_Name');
            $table->string('Management_type');
            $table->string('package_desc');
            $table->integer('Package_cost');
            $table->float('rating', 8, 2);
            $table->integer('validity');
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
        Schema::dropIfExists('package_list_table');
    }
}
