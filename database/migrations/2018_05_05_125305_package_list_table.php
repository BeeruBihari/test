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
            $table->increments('package_id'); 
            $table->string('package_name');
            $table->string('management_type');
            $table->string('key_features');
            $table->string('package_desc');
            $table->integer('package_cost');
            $table->float('rating');
            $table->integer('validity');
            $table->integer('image_path');
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
