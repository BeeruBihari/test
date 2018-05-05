<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyClintListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_clint_list_table', function (Blueprint $table) {
            $table->string('my_clint_id');
            $table->string('clint_name',250);
            $table->string('password',250);
            $table->string('db_details_json');
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
        Schema::dropIfExists('my_clint_list_table');
    }
}
